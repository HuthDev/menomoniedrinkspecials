<?php

class MainController extends BaseController {


	public function loadDayIndex()
	{
		return View::make('daysoftheweek');
	}

	public function loadBarIndex()
	{
		return View::make('barlist');
	}

	public function loadIndivBar($barName)
	{
		Log::info($barName);
		$bar = Bar::where('nickname', '=', $barName)->first();
		$days = Day::get();

		foreach($days as $day)
		{
			$day->specials = Special::where('barid', '=', $bar->id)->where('dayid', '=', $day->id)->get();
		}

		return View::make('bars/' . $barName)->with('days', $days)->with('bar', $bar);
	}

	public function loadDay($dayID)
	{
		$bars = Bar::where('active', '=', 1)->get();

		if($dayID == 8)
		{
			foreach ($bars as $bar) {
				$bar->specials = Birthday::where('barid', '=', $bar->id)->get();
			}

			return View::make('bars/birthday')->with('bars', $bars);
		}
		elseif($dayID == 9)
		{
			return Redirect::to('http://www.menomoniedrinkspecials.com/blog');
		}
		else
		{
			foreach ($bars as $bar) {
				$bar->specials = Special::where('barid', '=', $bar->id)->where('dayid', '=', $dayID)->get();
			}

			$dayOfWeek = DB::table('days')->where('id', '=', $dayID)->first();

			return View::make('bars/day')->with('bars', $bars)->with('day', $dayOfWeek);
		}
	}

	public function loadBlog($blogName)
	{
		return View::make('blogs/' . $blogName . 'Blog');
	}

	public function indexBlog()
	{
		return View::make('blogs/abbeyBlog');
	}

	public function loadAlex()
	{
		return View::make('alex');
	}

}
