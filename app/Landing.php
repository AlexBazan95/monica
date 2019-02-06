<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Landing extends Model
{
	protected $table = 'pages';

    public static function getSections($page_id)
    {
    	$getBlocks = Landing::where('page_id', $page_id)->orderBy('sord', 'desc')->get();
        $identifiers = '';

    	foreach ($getBlocks as $key => $block) {
    		$blocks[$key]['desc'] = $block->block_desc;
    		$blocks[$key]['sizes'] = $block->sizes;
            $blocks[$key]['sord'] = $block->sord;

            $blocks[$key]['type'] = DB::table('pages_types')
                ->where('id', $block->type_id)
                ->value('blade_name');
            
            if ($block->uident !=='' && $block->uident !== null) {
                $blocks[$key]['uident'] = $block->uident;
            }else{
                $blocks[$key]['uident'] = self::genRandomStr();
            }

    		$blocks[$key]['val'] = self::getBlockValues($block['id'], 'lang_content');
            $blocks[$key]['title'] = self::getBlockValues($block['id'], 'lang_title');
            $blocks[$key]['subtitle'] = self::getBlockValues($block['id'], 'lang_subtitle');
            $blocks[$key]['img'] = self::getBlockValues($block['id'], 'img');
    	}

    	return $blocks;
    }

    public static function getOption($id)
    {
    	return DB::table('settings')
    		->where('descript', "pack.$id")
    		->where('val2', str_replace('_', '-', app()->getLocale()))
    		->value('val1');
    }

    public static function genRandomStr()
    {
       return md5(rand(10000, 99999));
    }

    public static function getBlockValues($id, $val)
    {
        return DB::table('pages_blockvalues')
            ->where('lang_id', str_replace('_', '-', app()->getLocale()))
            ->where('blockvalue_id', $id)
            ->value($val);
    }

    public static function updateLandingBlocks($blocks)
    {
        unset($blocks['_token']);

        foreach ($blocks as $key => $block) {
            foreach ($block as $eKey => $value) {
                $elements[$eKey][] = $value;
            }
        }
        
        foreach ($elements as $element) {

            DB::table('pages')
                ->where('uident', $element[4])
                ->update([
                    'sord' => $element[0]
                ]);

            DB::table('pages_blockvalues')
                ->where('blockvalue_id', DB::table('pages')->where('uident', $element[4])->value('id'))
                ->where('lang_id', str_replace('_', '-', app()->getLocale()))
                ->update([
                    'lang_content' => $element[2],
                    'lang_subtitle' => $element[7],
                    'lang_title' => $element[6],
                    'img' => $element[8]
                ]);
        }

        return response()->json("updated");
    }
}
