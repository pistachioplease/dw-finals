<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FactSolarProjects;

class WireframeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex(Request $request)
	{
		// get current Year's Revenue
		$data['revenue'] = FactSolarProjects::select(\DB::raw('dimTime.month, sum(factSolarProjects.amount) as revenue'))
			->join('dimTime', 'dimTime.id', '=', 'factSolarProjects.id_time')
			->where('dimTime.year', '=', date('Y'))
			->groupBy('dimTime.month')
			->orderBy('dimTime.month_number')
			->get();

		// get current Year's Top Location
		$data['location'] = FactSolarProjects::select(\DB::raw('CONCAT(dimLocation.city, ", ", dimLocation.state) as location, sum(factSolarProjects.id_location) as total'))
			->join('dimTime', 'dimTime.id', '=', 'factSolarProjects.id_time')
			->join('dimLocation', 'dimLocation.id', '=', 'factSolarProjects.id_location')
			->where('dimTime.year', '=', date('Y'))
			->groupBy('location')
			->orderBy('total', 'desc')
			->take(10)
			->get();
		// return $data['location'];

		// get current Year's Top Sales Team
		$data['sales_team'] = FactSolarProjects::select(\DB::raw('CONCAT(dimSalesTeam.sales_team_leader_lname, ", ", dimSalesTeam.sales_team_leader_fname) as team_leader, sum(factSolarProjects.id_sales_team) as total'))
			->join('dimTime', 'dimTime.id', '=', 'factSolarProjects.id_time')
			->join('dimSalesTeam', 'dimSalesTeam.id', '=', 'factSolarProjects.id_sales_team')
			->where('dimTime.year', '=', date('Y'))
			->groupBy('team_leader')
			->orderBy('total', 'desc')
			->take(5)
			->get();


		return view('wireframe/dashboard', $data);
	}

	public function getProjects()
	{
		// get current Year's Revenue
		$data['revenue'] = FactSolarProjects::select(\DB::raw('dimTime.month, sum(factSolarProjects.amount) as revenue'))
			->join('dimTime', 'dimTime.id', '=', 'factSolarProjects.id_time')
			->where('dimTime.year', '=', date('Y'))
			->groupBy('dimTime.month')
			->orderBy('dimTime.month_number')
			->get();

		// get location, number of projects, and revenue
		$data['location'] = FactSolarProjects::select(\DB::raw('CONCAT(dimLocation.city, ", ", dimLocation.state) as location, sum(factSolarProjects.id_location) as total, sum(factSolarProjects.amount) as revenue'))
			->join('dimTime', 'dimTime.id', '=', 'factSolarProjects.id_time')
			->join('dimLocation', 'dimLocation.id', '=', 'factSolarProjects.id_location')
			->where('dimTime.year', '=', date('Y'))
			->groupBy('location')
			->orderBy('total', 'desc')
			->get();
		// return $data['location'];

		return view('wireframe/projects', $data);
	}

	public function postProjectrevenue(Request $request) {
		$starttime = mktime(1, 0, 0, substr($request->start,5,2), substr($request->start,8,2), substr($request->start,0,4));
		$endtime = mktime(1, 0, 0, substr($request->end,5,2), substr($request->end,8,2), substr($request->end,0,4));
		$revenue = FactSolarProjects::select(\DB::raw('dimTime.month, sum(factSolarProjects.amount) as revenue'))
			->join('dimTime', 'dimTime.id', '=', 'factSolarProjects.id_time')
			->where('dimTime.timestamp', '>', $starttime)
			->where('dimTime.timestamp', '<', $endtime)
			->groupBy('dimTime.month')
			->orderBy('dimTime.month_number')
			->get();

		return $revenue;
	}

	public function getAdhoc()
	{
		return view('wireframe/adhoc');
	}

	public function getCronlog()
	{
		return view('wireframe/cronlog');
	}

	public function getStagingdb()
	{
		return view('wireframe/stagingdb');
	}

	public function getDwadmin()
	{
		return view('wireframe/dwadmin');
	}

	public function getLogin()
	{
		return view('wireframe/login');
	}

}
