<?php

namespace App\Http\Controllers;

use Analytics;
use App\Models\checklist;
use App\Models\my_vendors;
use App\User;
use Spatie\Analytics\Period;

use Illuminate\Http\Request;

class AdminAnalyticsController extends Controller
{
    /**
     * @return $this
     */
    public function selectAnalyticsDate()
    {
        $visitorData = Analytics::fetchTotalVisitorsAndPageViews(Period::days(30));
        $visitedPageData = Analytics::fetchMostVisitedPages(Period::days(30),1000);
        $toprefData=Analytics::fetchTopReferrers(Period:: days(30));
        $deviceData=Analytics::performQuery(Period::days(30),'ga:users',['dimensions' => 'ga:deviceCategory']);
        //echo "<pre>";
        //print_r($visitedPageData);
        //nirjhor
        //kamol

        

        $data['date']=array();
        $data['visitors']=array();
        $data['page_views']=array();
        $data['total_visitor']=0;

        foreach ($visitorData as $vd)
        {
            array_push($data['date'],$vd['date']->format('d-m-Y'));
            array_push($data['visitors'],$vd['visitors']);
            array_push($data['page_views'],$vd['pageViews']);
            $data['total_visitor']=$data['total_visitor']+$vd['visitors'];
        }

        $data['ref_url']=array("Direct","Google","Facebook","Others");
        $data['ref_page_views']=array();
        $directView=0;
        $googleView=0;
        $facebookView=0;
        $othersView=0;

        foreach ($toprefData as $trd)
        {
            if(strpos($trd['url'], 'direct') !== false)
            {
                $directView=$directView+$trd['pageViews'];
            }
            else if(strpos($trd['url'], 'google') !== false)
            {
                $googleView=$googleView+$trd['pageViews'];
            }
            else if(strpos($trd['url'], 'facebook') !== false)
            {
                $facebookView=$facebookView+$trd['pageViews'];
            }
            else
            {
                $othersView=$othersView+$trd['pageViews'];
            }
        }
        array_push($data['ref_page_views'],$directView);
        array_push($data['ref_page_views'],$googleView);
        array_push($data['ref_page_views'],$facebookView);
        array_push($data['ref_page_views'],$othersView);
        $data['total_traffic']=$directView+$googleView+$facebookView+$othersView;

        $data['device_type']=array();
        $data['device_view']=array();
        $data['total_device']=0;

        foreach($deviceData as $dd)
        {
            //print_r($dd);
            array_push($data['device_type'],$dd[0]);
            array_push($data['device_view'],$dd[1]);
            $data['total_device']=$data['total_device']+$dd[1];
        }

        $data['category_name']=array("Vehicle","Light & Sound","Holud Snacks","Dala Kula",
            "Holud Accessories", "Wedding Accessories","Alpona","Choreography","Holud Dress",
            "Venue","Catering","Photo & Cinematography", "Decoration","Invitation Cards",
            "Bridal Outfit","DJ","Makeup Artist","Bakaries","Mehedi","Kazi","Jewellery");
        $data['category_view']=array();
        $v=0;$ls=0;$hs=0;$dk=0;$h=0;$w=0;$a=0;$c=0;$ve=0;$ca=0;$pc=0;$d=0;$ic=0;$bo=0;$dj=0;
        $hd=0;$ma=0;$b=0;$m=0;$k=0;$j=0;
        foreach($visitedPageData as $vd)
        {
            switch($vd['url'])
            {
                case "/services/vehicle":
                    $v=$v+$vd['pageViews'];
                    break;
                case "/services/light_&_sound":
                    $ls=$ls+$vd['pageViews'];
                    break;
                case "/services/holud_snacks":
                    $hs=$hs+$vd['pageViews'];
                    break;
                case "/services/dala_kula":
                    $dk=$dk+$vd['pageViews'];
                    break;
                case "/services/holud":
                    $h=$h+$vd['pageViews'];
                    break;
                case "/services/wedding":
                    $w=$w+$vd['pageViews'];
                    break;
                case "/services/alpona":
                    $a=$a+$vd['pageViews'];
                    break;
                case "/services/Choreography":
                    $c=$c+$vd['pageViews'];
                    break;
                case "/services/holud_dress":
                    $hd=$hd+$vd['pageViews'];
                    break;
                case "/vendors/venue":
                    $ve=$ve+$vd['pageViews'];
                    break;
                case "/vendors/catering":
                    $ca=$ca+$vd['pageViews'];
                    break;
                case "/vendors/photography_and_cinematography":
                    $pc=$pc+$vd['pageViews'];
                    break;
                case "/vendors/decoration":
                    $d=$d+$vd['pageViews'];
                    break;
                case "/vendors/invitation_cards":
                    $ic=$ic+$vd['pageViews'];
                    break;
                case "/vendors/bridal_outfit":
                    $bo=$bo+$vd['pageViews'];
                    break;
                case "/vendors/dj":
                    $dj=$dj+$vd['pageViews'];
                    break;
                case "/vendors/makeup_artist":
                    $ma=$ma+$vd['pageViews'];
                    break;
                case "/vendors/bakeries":
                    $b=$b+$vd['pageViews'];
                    break;
                case "/vendors/mehedi":
                    $m=$m+$vd['pageViews'];
                    break;
                case "/vendors/kazi":
                    $k=$k+$vd['pageViews'];
                    break;
                case "/vendors/jewellery":
                    $j=$j+$vd['pageViews'];
                    break;
                default:
                    break;
            }
        }

        array_push($data['category_view'],$v);
        array_push($data['category_view'],$ls);
        array_push($data['category_view'],$hs);
        array_push($data['category_view'],$dk);
        array_push($data['category_view'],$h);
        array_push($data['category_view'],$w);
        array_push($data['category_view'],$a);
        array_push($data['category_view'],$c);
        array_push($data['category_view'],$hd);
        array_push($data['category_view'],$ve);
        array_push($data['category_view'],$ca);
        array_push($data['category_view'],$pc);
        array_push($data['category_view'],$d);
        array_push($data['category_view'],$ic);
        array_push($data['category_view'],$bo);
        array_push($data['category_view'],$dj);
        array_push($data['category_view'],$ma);
        array_push($data['category_view'],$b);
        array_push($data['category_view'],$m);
        array_push($data['category_view'],$k);
        array_push($data['category_view'],$j);

        $data['monthly_plan']=array();
        array_push($data['monthly_plan'],User::where('mybudget','>',0)->get()->count());
        array_push($data['monthly_plan'],checklist::distinct()->get(['user_id'])->count('user_id'));
        array_push($data['monthly_plan'],my_vendors::distinct()->get(['user_id'])->count('user_id'));
        //echo $m;
        $data['total_mp']=$data['monthly_plan'][0]+$data['monthly_plan'][1]+$data['monthly_plan'][2];
        return view('admin.analytics')->with('analyticsData',$data);
    }

    public function showVisitorAnalytics(Request $request)
    {
        $sd=date_create($request->start_date);
        $ed=date_create($request->end_date);

        $visitorData = Analytics::fetchTotalVisitorsAndPageViews(Period::create($sd, $ed));
        $visitedPageData = Analytics::fetchMostVisitedPages(Period::create($sd, $ed),1000);
        $toprefData=Analytics::fetchTopReferrers(Period::create($sd, $ed));
        $deviceData=Analytics::performQuery(Period::create($sd, $ed),'ga:users',['dimensions' => 'ga:deviceCategory']);
        //echo "<pre>";
        //print_r($visitedPageData);

        $data['date']=array();
        $data['visitors']=array();
        $data['page_views']=array();
        $data['total_visitor']=0;

        foreach ($visitorData as $vd)
        {
            array_push($data['date'],$vd['date']->format('d-m-Y'));
            array_push($data['visitors'],$vd['visitors']);
            array_push($data['page_views'],$vd['pageViews']);
            $data['total_visitor']=$data['total_visitor']+$vd['visitors'];
        }

        $data['ref_url']=array("Direct","Google","Facebook","Others");
        $data['ref_page_views']=array();
        $directView=0;
        $googleView=0;
        $facebookView=0;
        $othersView=0;

        foreach ($toprefData as $trd)
        {
            if(strpos($trd['url'], 'direct') !== false)
            {
                $directView=$directView+$trd['pageViews'];
            }
            else if(strpos($trd['url'], 'google') !== false)
            {
                $googleView=$googleView+$trd['pageViews'];
            }
            else if(strpos($trd['url'], 'facebook') !== false)
            {
                $facebookView=$facebookView+$trd['pageViews'];
            }
            else
            {
                $othersView=$othersView+$trd['pageViews'];
            }
        }
        array_push($data['ref_page_views'],$directView);
        array_push($data['ref_page_views'],$googleView);
        array_push($data['ref_page_views'],$facebookView);
        array_push($data['ref_page_views'],$othersView);
        $data['total_traffic']=$directView+$googleView+$facebookView+$othersView;

        $data['device_type']=array();
        $data['device_view']=array();
        $data['total_device']=0;

        foreach($deviceData as $dd)
        {
            //print_r($dd);
            array_push($data['device_type'],$dd[0]);
            array_push($data['device_view'],$dd[1]);
            $data['total_device']=$data['total_device']+$dd[1];
        }

        $data['category_name']=array("Vehicle","Light & Sound","Holud Snacks","Dala Kula",
            "Holud Accessories", "Wedding Accessories","Alpona","Choreography","Holud Dress",
            "Venue","Catering","Photo & Cinematography", "Decoration","Invitation Cards",
            "Bridal Outfit","DJ","Makeup Artist","Bakaries","Mehedi","Kazi","Jewellery");
        $data['category_view']=array();
        $v=0;$ls=0;$hs=0;$dk=0;$h=0;$w=0;$a=0;$c=0;$ve=0;$ca=0;$pc=0;$d=0;$ic=0;$bo=0;$dj=0;
        $hd=0;$ma=0;$b=0;$m=0;$k=0;$j=0;
        foreach($visitedPageData as $vd)
        {
            switch($vd['url'])
            {
                case "/services/vehicle":
                    $v=$v+$vd['pageViews'];
                    break;
                case "/services/light_&_sound":
                    $ls=$ls+$vd['pageViews'];
                    break;
                case "/services/holud_snacks":
                    $hs=$hs+$vd['pageViews'];
                    break;
                case "/services/dala_kula":
                    $dk=$dk+$vd['pageViews'];
                    break;
                case "/services/holud":
                    $h=$h+$vd['pageViews'];
                    break;
                case "/services/wedding":
                    $w=$w+$vd['pageViews'];
                    break;
                case "/services/alpona":
                    $a=$a+$vd['pageViews'];
                    break;
                case "/services/Choreography":
                    $c=$c+$vd['pageViews'];
                    break;
                case "/services/holud_dress":
                    $hd=$hd+$vd['pageViews'];
                    break;
                case "/vendors/venue":
                    $ve=$ve+$vd['pageViews'];
                    break;
                case "/vendors/catering":
                    $ca=$ca+$vd['pageViews'];
                    break;
                case "/vendors/photography_and_cinematography":
                    $pc=$pc+$vd['pageViews'];
                    break;
                case "/vendors/decoration":
                    $d=$d+$vd['pageViews'];
                    break;
                case "/vendors/invitation_cards":
                    $ic=$ic+$vd['pageViews'];
                    break;
                case "/vendors/bridal_outfit":
                    $bo=$bo+$vd['pageViews'];
                    break;
                case "/vendors/dj":
                    $dj=$dj+$vd['pageViews'];
                    break;
                case "/vendors/makeup_artist":
                    $ma=$ma+$vd['pageViews'];
                    break;
                case "/vendors/bakeries":
                    $b=$b+$vd['pageViews'];
                    break;
                case "/vendors/mehedi":
                    $m=$m+$vd['pageViews'];
                    break;
                case "/vendors/kazi":
                    $k=$k+$vd['pageViews'];
                    break;
                case "/vendors/jewellery":
                    $j=$j+$vd['pageViews'];
                    break;
                default:
                    break;
            }
        }

        array_push($data['category_view'],$v);
        array_push($data['category_view'],$ls);
        array_push($data['category_view'],$hs);
        array_push($data['category_view'],$dk);
        array_push($data['category_view'],$h);
        array_push($data['category_view'],$w);
        array_push($data['category_view'],$a);
        array_push($data['category_view'],$c);
        array_push($data['category_view'],$hd);
        array_push($data['category_view'],$ve);
        array_push($data['category_view'],$ca);
        array_push($data['category_view'],$pc);
        array_push($data['category_view'],$d);
        array_push($data['category_view'],$ic);
        array_push($data['category_view'],$bo);
        array_push($data['category_view'],$dj);
        array_push($data['category_view'],$ma);
        array_push($data['category_view'],$b);
        array_push($data['category_view'],$m);
        array_push($data['category_view'],$k);
        array_push($data['category_view'],$j);

        $data['monthly_plan']=array();
        array_push($data['monthly_plan'],User::where('mybudget','>',0)->get()->count());
        array_push($data['monthly_plan'],checklist::distinct()->get(['user_id'])->count('user_id'));
        array_push($data['monthly_plan'],my_vendors::distinct()->get(['user_id'])->count('user_id'));
        //echo $m;
        $data['total_mp']=$data['monthly_plan'][0]+$data['monthly_plan'][1]+$data['monthly_plan'][2];
        return view('admin.analytics')->with('analyticsData',$data);
    }
}
