<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\checklist;
use Auth;
use Illuminate\Support\Facades\Redirect;

class ChecklistController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(Request $r, $id)
    {

        $id = \Illuminate\Support\Facades\Auth::user()->id;



        $datas = checklist::where('user_id', $id)->get();

        //return count($datas);
        if(count($datas) == 0){
            $this->uploadFirstChecklist($id);
            $datas = checklist::where('user_id', $id)->get();
        }


        return view('user.my-checklist', compact('datas'));
    }

    public function resetChecklist(Request $request){
        //echo "ok";

        $userId = \Illuminate\Support\Facades\Auth::user()->id;

        $totals = checklist::where('user_id',$userId)->get();

        foreach($totals as $check){
            $check->delete();
        }

        return Redirect::back();


    }


    public function addNew(Request $r)
    {

        $add = new checklist;
        $add->user_id = Auth::user()->id;
        $add->section = $r->section;
        $add->details = $r->details;

        if(isset($r->estimated_time)){
            $add->time = $r->estimated_time;
        }

        $add->save();

        return Redirect::back()->withErrors($r->section);
    }


    public function deleteChecklist($id)
    {

        $add = checklist::find($id);
        $section = $add->section;
        $add->delete();

        return Redirect::back()->withErrors($section);

    }


    public function checkChecklist($id,$status)
    {
        //return "$id checked $status";

        //exit;

        //echo $status = $r->status;
        $add = checklist::find($id)->update(['status' => $status]);
        return "Updated";

    }


    public function uploadFirstChecklist($user_id)
    {

        //echo $user_id;

        //$section_1

        $set_1 = [
            "Fix your event dates",
            "Create guest list.",
            "Fix your budget"
        ];

        $time_1 = [
            "8 months",
            "8 months",
            "8 months",
        ];

        $set_2 = [
            "Decide on joint ceremony or separate.",
            "Look up wedding and holud venues within budget",
            "Finalize selection of event venue.",
            "Complete booking payment of the venue.",
            "Visit venue for reassuring everything."
        ];
        $time_2 = [
            "8 months",
            "7 months",
            "6 months",
            "6 months",
            "15 days",
        ];


        $set_3 = [
            "Research online for wedding and holud ceremony theme",
            " Read our articles to know current trends and ideas",
            " Talk to relatives and friends regarding bride-groom entry theme",
            " Finalize your Decoration theme as well as the Decor team",
            " Discuss theme with Decor team",
            " Select & book florists to decorate home and car",
            " Send someone at the venue on event day to assure the progress.",
            " Read our articles to find different poses or theme for your photos",
            " Discuss theme, decoration, lighting and make up with photographer",
            " Discuss preferred song for cinematic trailer",
            " Done your pre-wedding shoot if you have any plan",
            " Send someone at the venue on event day to assure the progress."
        ];
        $time_3 = [
            "4 months",
            "4 months",
            "4 months",
            "3 months",
            "2 months",
            "2 weeks",
            "",
            "2 months",
            "1 months",
            "1 months",
            "15 days",
            "",
        ];


        $set_4 = [
            " Research about wedding outfits through our articles",
            " Finalize selection of your wedding dress.",
            " Make a list of outfits for other days",
            " Create a list of clothes for relatives and in laws.",
            " Finish your shopping",
            " Tailoring of clothes",
            " Check up with tailor for trial and fitting"
        ];
        $time_4 = [
            "3 months",
            "3 months",
            "2 months",
            "2 months",
            "2 months",
            "at least 1 month ",
            "at least 15 days ",
        ];


        $set_5 = [
            " Create a budget for jewelleries ",
            " Try to hunt down your treasure jewellery as a blessing from your elders if you are the bride.",
            " Research online for trending types of jewelleries.",
            " Select jewelleries that matches your outfit and theme",
            " Take help from someone experienced on jewellery shopping day "
        ];
        $time_5 = [
            "3 months",
            "3 months",
            "3 months",
            "2 months",
            "1 month",
        ];


        $set_6 = [
            " Maintain diet and start gym. ",
            " Research online and read our articles for make-up theme matching your outfits & jewellery.",
            " Book beauty parlor closer to home and venue ",
            " Discuss with makeup artists about your preference ",
            " Groom must get haircut & facial treatment. ",
            " Start early for parlour and try to reach at venue 1 hour  scheduled time."
        ];
        $time_6 = [
            "3 months",
            "3 months",
            "2 month ",
            "1 month ",
            "5-7 days ",
            "Event day",
        ];


        $set_7 = [
            " Research photographers online and social media ",
            " Select and book photographer & cinematographer ",
            " Read our articles to find different poses or theme for your photos ",
            " Discuss theme, decoration, lighting and make up with photographer ",
            " Discuss preferred song for cinematic trailer ",
            " Done your pre-wedding shoot if you have any plan "
        ];
        $time_7 = [
            "6 months",
            "4 months ",
            "2 months",
            "1 month",
            "1 month",
            "15 days",
        ];


        $set_8 = [
            " Select invitation card design. ",
            " Double check the texts for card/order ",
            " Print required no. of cards ",
            " Send out or deliver invitation cards ",
            " Create a Facebook event page and invite guests. "
        ];
        $time_8 = [
            "2 months",
            "2 months",
            "2 months",
            "1 month",
            "15 days",
        ];


        $set_9 = [
            " Select your food menus for different ceremonies. ",
            " Appoint preferred catering and discuss the menu. ",
            " Make a list of relatives and in laws to distribute sweets/desserts "
        ];
        $time_9 = [
            "2 months",
            "1 month",
            "1 week",
        ];


        $set_10 = [
            " Create list of people for your dance practice. ",
            " Select for bands/solo artists/DJ ",
            " Download and edit/cut finalized songs for dance performance ",
            " Fix date, time and place for dance practice. ",
            " Book Choreographer from Ayojok.com if you need ",
            " Book sound system & lighting.",
            " Discuss preferred songs with band/artist/DJ"
        ];
        $time_10 = [
            "2 months",
            "2 months",
            "1 months",
            "1 months",
            "1 months",
            "1 months",
            "15 days",
        ];


        $set_11 = [
            " Find a Wedding Officiant ",
            " Gather necessary documents to file marriage license "
        ];
        $time_11 = [
            "1 month ",
            "15 days",
        ];


        $set_12 = [
            " Make a list of goodies that you will give as trousseau ",
            " Packing gifts for wedding and Ask relatives and friends for help ",
            " Ensure a separate car to take the gifts to the venue "
        ];
        $time_12 = [
            "1 month",
            "5 days",
            "2 days",
        ];


        $set_13 = [
            " Rent a car for bride/groom car if necessary. ",
            " Rent cars for friends & family. ",
            " Make a schedule for car decoration and hire someone accordingly. (groom side) ",
            " Book hotels/guest houses for guests from outside towns. ",
            " Book hotels or resorts for destination wedding "
        ];
        $time_13 = [
            "2 weeks",
            "2 weeks",
            "2 weeks",
            "1 month ",
            "5 months ",
        ];


        $set_14 = [
            " Create a budget for honeymoon ",
            " Research online for honeymoon destinations. ",
            " Select honeymoon destination and fix travel date. ",
            " Search online for best tourism packages ",
            " Book hotels online via air bnb, tripadvisor etc ",
            " Purchase plane tickets "
        ];
        $time_14 = [
            "2 months",
            "2 months",
            "1 month",
            "1 month",
            "1 month",
            "1 month",
        ];


        $i = 0;

        $i++;
        $j = 0;
        foreach ($set_1 as $detail) {
            $checkList = new checklist();
            $checkList->user_id = $user_id;
            $checkList->section = $i;
            $checkList->details = $detail;
            $checkList->time = $time_1[$j];
            $checkList->status = 0;

            $checkList->save();

            $j++;
        }

        $i++;
        $j = 0;
        foreach ($set_2 as $detail) {
            $checkList = new checklist();
            $checkList->user_id = $user_id;
            $checkList->section = $i;
            $checkList->details = $detail;
            $checkList->time = $time_2[$j];

            $checkList->status = 0;

            $checkList->save();
            $j++;
        }
        $i++;
        $j = 0;
        foreach ($set_3 as $detail) {
            $checkList = new checklist();
            $checkList->user_id = $user_id;
            $checkList->section = $i;
            $checkList->details = $detail;
            $checkList->time = $time_3[$j];

            $checkList->status = 0;

            $checkList->save();
            $j++;
        }


        $i++;
        $i++; /*Cause Nafis bhai use 5 instead of 4  after 3 in checklist page */
        $j = 0;
        foreach ($set_4 as $detail) {
            $checkList = new checklist();
            $checkList->user_id = $user_id;
            $checkList->section = $i;
            $checkList->details = $detail;
            $checkList->time = $time_4[$j];

            $checkList->status = 0;

            $checkList->save();
            $j++;
        }

        $i++;
        $j = 0;
        foreach ($set_5 as $detail) {
            $checkList = new checklist();
            $checkList->user_id = $user_id;
            $checkList->section = $i;
            $checkList->details = $detail;
            $checkList->time = $time_5[$j];

            $checkList->status = 0;

            $checkList->save();
            $j++;
        }

        $i++;
        $j = 0;
        foreach ($set_6 as $detail) {
            $checkList = new checklist();
            $checkList->user_id = $user_id;
            $checkList->section = $i;
            $checkList->details = $detail;
            $checkList->time = $time_6[$j];

            $checkList->status = 0;

            $checkList->save();
            $j++;
        }

        $i++;
        $j = 0;
        foreach ($set_7 as $detail) {
            $checkList = new checklist();
            $checkList->user_id = $user_id;
            $checkList->section = $i;
            $checkList->details = $detail;
            $checkList->time = $time_7[$j];

            $checkList->status = 0;

            $checkList->save();
            $j++;
        }

        $i++;
        $j = 0;
        foreach ($set_8 as $detail) {
            $checkList = new checklist();
            $checkList->user_id = $user_id;
            $checkList->section = $i;
            $checkList->details = $detail;
            $checkList->time = $time_8[$j];

            $checkList->status = 0;

            $checkList->save();
            $j++;
        }

        $i++;
        $j = 0;
        foreach ($set_9 as $detail) {
            $checkList = new checklist();
            $checkList->user_id = $user_id;
            $checkList->section = $i;
            $checkList->details = $detail;
            $checkList->time = $time_9[$j];

            $checkList->status = 0;

            $checkList->save();
            $j++;
        }

        $i++;
        $j = 0;
        foreach ($set_10 as $detail) {
            $checkList = new checklist();
            $checkList->user_id = $user_id;
            $checkList->section = $i;
            $checkList->details = $detail;
            $checkList->time = $time_10[$j];

            $checkList->status = 0;

            $checkList->save();
            $j++;
        }

        $i++;
        $j = 0;
        foreach ($set_11 as $detail) {
            $checkList = new checklist();
            $checkList->user_id = $user_id;
            $checkList->section = $i;
            $checkList->details = $detail;
            $checkList->time = $time_11[$j];

            $checkList->status = 0;

            $checkList->save();
            $j++;
        }

        $i++;
        $j = 0;
        foreach ($set_12 as $detail) {
            $checkList = new checklist();
            $checkList->user_id = $user_id;
            $checkList->section = $i;
            $checkList->details = $detail;
            $checkList->time = $time_12[$j];

            $checkList->status = 0;

            $checkList->save();
            $j++;
        }

        $i++;
        $j = 0;
        foreach ($set_13 as $detail) {
            $checkList = new checklist();
            $checkList->user_id = $user_id;
            $checkList->section = $i;
            $checkList->details = $detail;
            $checkList->time = $time_13[$j];

            $checkList->status = 0;

            $checkList->save();
            $j++;
        }

        $i++;
        $j = 0;
        foreach ($set_14 as $detail) {
            $checkList = new checklist();
            $checkList->user_id = $user_id;
            $checkList->section = $i;
            $checkList->details = $detail;
            $checkList->time = $time_14[$j];

            $checkList->status = 0;

            $checkList->save();
            $j++;
        }


        return Redirect::back();


    }


}
