<?php

namespace App\Http\Controllers;

use App\FrontModule;
use App\SiteSetting;
use App\Product;
use App\ProductImage;



use Illuminate\Http\Request;

class FrontModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName = "";
    private $sdc;
    public function __construct()
    {
        $this->sdc = new CoreCustomController();
    }



    public function dashboard()
    {
        return view('admin.pages.dashboard.index');
    }

    public function index()
    {
        $SiteSetting = SiteSetting::all();
        $Product = Product::orderBy('id', 'DESC')->get();
        $ProductImage = ProductImage::where('product_id', $Product->id)->get();
        // $Product = Product::where('module_status', 'Active')->orderBy('id', 'ASC')->get();


        dd($SiteSetting);
        return view(
            'site.pages.index',
            compact(
                'SiteSetting',
                'Product',
                'ProductImage'
            )
        );
    }

    public function howitworks()
    {
        $HowitWorksPageSetting = HowitWorksPageSetting::where('module_status', 'Active')->orderBy('id', 'DESC')->first();
        $howitworksdonotsettleforless = HowItWorksDoNotSettleForLess::orderBy('id', 'DESC')->first();
        $HowItWorksDoNotSettleStep = HowItWorksDoNotSettleStep::where('module_status', 'Active')->orderBy('id', 'ASC')->get();
        $HowItWorkCasesWeFund = HowItWorkCasesWeFund::orderBy('id', 'DESC')->first();
        $HowItWorkSecuringTheMoney = HowItWorkSecuringTheMoney::orderBy('id', 'DESC')->first();
        //dd($HowitWorksPageSetting);
        return view(
            'site.pages.how-it-works',
            compact(
                'HowitWorksPageSetting',
                'howitworksdonotsettleforless',
                'HowItWorksDoNotSettleStep',
                'HowItWorkCasesWeFund',
                'HowItWorkSecuringTheMoney'
            )
        );
    }

    public function typesoffunding()
    {
        $typeoffundpage = TypeofFundPage::where('module_status', 'Active')->orderBy('id', 'DESC')->first();
        $caseswefundtype = TypesOfFundingPreSettlement::orderBy('id', 'DESC')->first();
        $FundingForm = FundingForm::where('module_status', 'Active')->orderBy('id', 'ASC')->get();
        $CasesWeFundType = TypesOfFundCasesWeFundType::orderBy('id', 'DESC')->first();
        $HelpOnManyCaseTypes = HelpOnManyCaseTypes::where('module_status', 'Active')->orderBy('id', 'ASC')->get();
        //dd($HelpOnManyCaseTypes);
        return view(
            'site.pages.types-of-funding',
            compact(
                'typeoffundpage',
                'caseswefundtype',
                'FundingForm',
                'CasesWeFundType',
                'HelpOnManyCaseTypes'
            )
        );
    }

    public function about()
    {

        $AboutPageSetting = AboutPageSetting::where('module_status', 'Active')->orderBy('id', 'DESC')->first();
        $AboutMilestones = AboutMilestones::orderBy('id', 'DESC')->first();
        $AboutMeetOurTeam = AboutMeetOurTeam::orderBy('id', 'DESC')->first();
        $MeetLeaderSetting = MeetLeaderSetting::orderBy('id', 'DESC')->first();
        $AboutWorkAtAdvantageLending = AboutWorkAtAdvantageLending::orderBy('id', 'DESC')->first();
        $AboutMeetOurTeamMember = AboutMeetOurTeamMember::orderBy('id', 'DESC')->get();
        $TeamMember = TeamMember::orderBy('id', 'DESC')->get();
        //dd($AboutMeetOurTeamMember);

        return view(
            'site.pages.about',
            compact(
                'AboutPageSetting',
                'AboutMilestones',
                'AboutMeetOurTeam',
                'AboutMeetOurTeamMember',
                'MeetLeaderSetting',
                'TeamMember',
                'AboutWorkAtAdvantageLending'
            )
        );
    }

    public function faq()
    {
        $faq = $this->faqData();
        $faqinfo = FaqPageSetting::orderBy('id', 'DESC')->first();
        // dd($faqinfo);
        return view('site.pages.faq', compact('faq', 'faqinfo'));
    }

    public function forattorneys()
    {

        $ForAttorneyPageSetting = ForAttorneyPageSetting::orderBy('id', 'DESC')->first();
        $ForAttorneySettlementFundingProcess = ForAttorneySettlementFundingProcess::where('module_status', 'Active')->orderBy('id', 'ASC')->get();
        $ForAttorneyKnownandRecognized = ForAttorneyKnownandRecognized::orderBy('id', 'DESC')->first();
        $ForAtterneyPortalsimplify = ForAtterneyPortalsimplify::orderBy('id', 'DESC')->first();
        $ForAttorneyProductAndService = ForAttorneyProductAndService::where('module_status', 'Active')->orderBy('id', 'DESC')->get();
        $ContactMeAbout = ContactMeAbout::orderBy('id', 'DESC')->get();
        //dd($ForAttorneyProductAndService);
        return view(
            'site.pages.for-attorneys',
            compact(
                'ForAttorneyPageSetting',
                'ForAttorneySettlementFundingProcess',
                'ForAttorneyKnownandRecognized',
                'ForAtterneyPortalsimplify',
                'ForAttorneyProductAndService',
                'ContactMeAbout'
            )
        );
    }

    public function resources()
    {
        $ResourceContentInfo = ResourcePageSetting::where('module_status', 'Active')->orderBy('id', 'DESC')->first();
        $ResourceContent = ResourceContent::where('module_status', 'Active')->orderBy('id', 'DESC')->get();
        //dd($ResourceContent);
        return view(
            'site.pages.resource',
            compact(
                'ResourceContentInfo',
                'ResourceContent'
            )
        );
    }

    public function resourcesDetails(request $request, $id = 0, $title = '')
    {
        $details = ResourceContent::find($id);
        $ResourceContent = ResourceContent::where('module_status', 'Active')->orderBy('id', 'DESC')->get();
        //dd($details);
        return view('site.pages.resource-details', compact('details', 'ResourceContent'));
    }
    public function resourcesSearch(request $request)
    {
        $serach = $request->search_field;
        $query = ResourceContent::where('title', 'LIKE', '%' . $serach . '%')->orderBy('id', 'DESC')->get();
        //dd($query);
        return view('site.pages.resource-search', compact('query'));
    }

    public function contactus()
    {
        $USAState = USAState::all();
        $ContactMeAbout = ContactMeAbout::all();
        $ContactUs = ContactUs::where('module_status', 'Active')->orderBy('id', 'DESC')->first();
        //dd($ContactUs);
        return view('site.pages.contactus', compact('ContactUs', 'USAState', 'ContactMeAbout'));
    }

    public function careers()
    {
        /*use App\CareerPageSetting;
        use App\CareerPost;*/
        $CareerPage = CareerPageSetting::where('module_status', 'Active')->orderBy('id', 'DESC')->first();
        $CareerPost = CareerPost::where('module_status', 'Active')->orderBy('id', 'DESC')->get();
        //dd($CareerPost);
        return view('site.pages.careers', compact('CareerPage', 'CareerPost'));
    }

    public function forbrokers()
    {

        $ForBrokerPageSetting = ForBrokerPageSetting::where('module_status', 'Active')->orderBy('id', 'DESC')->first();
        $USAState = USAState::all();
        //dd($USAState);
        return view('site.pages.for-brokers', compact('ForBrokerPageSetting', 'USAState'));
    }

    public function completeapplication(Request $request)
    {

        $page = ApplicationPageSetting::orderBy('id', 'DESC')->first();



        $parse_array = array();
        if ($request->isMethod('post')) {
            $new_array = array('req' => $request);
            $parse_array = array_merge($parse_array, $new_array);
        }

        $USAState = USAState::all();
        $CaseType = CaseType::all();
        $HearAbout = HearAbout::all();

        $parse_array = array_merge($parse_array, array('USAState' => $USAState, 'CaseType' => $CaseType, 'HearAbout' => $HearAbout, 'page' => $page));
        return view('site.pages.complete-application', $parse_array);
    }

    public function structuredsettlementapplicationform()
    {
        return view('site.pages.structured-settlement-application-form');
    }

    public function inheritancefunding()
    {
        return view('site.pages.inheritance-funding');
    }

    public function needanattorney()
    {
        $state = USAState::all();
        $casetype = CaseType::all();
        $page = NeedAtterneyPageSetting::orderBy('id', 'DESC')->first();
        return view('site.pages.need-an-attorney',compact('page', 'state', 'casetype'));
    }
    public function termsOfUse()
    {
        $tabCount = TermsOfUse::where('module_status', 'Active')->count();
        if ($tabCount == 0) {
            return redirect(url('home'));
        } else {
            $TermsOfUse = TermsOfUse::where('module_status', 'Active')->first();
            return view('site.pages.terms-of-use', compact('TermsOfUse'));
        }
    }
    public function privacyPolicy()
    {
        $tabCount = PrivacyPolicyPage::where('module_status', 'Active')->count();
        if ($tabCount == 0) {
            return redirect(url('home'));
        } else {
            $PrivacyPolicy = PrivacyPolicyPage::where('module_status', 'Active')->first();
            return view('site.pages.privacy-policy', compact('PrivacyPolicy'));
        }
    }
    public function stateSpecificLicenses()
    {
        $tabCount = StateSpecificLicenses::where('module_status', 'Active')->count();
        if ($tabCount == 0) {
            return redirect(url('home'));
        } else {
            $licenses = StateSpecificLicenses::where('module_status', 'Active')->first();
            return view('site.pages.state-specific-licenses', compact('licenses'));
        }
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FrontModule  $frontModule
     * @return \Illuminate\Http\Response
     */
    public function show(FrontModule $frontModule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FrontModule  $frontModule
     * @return \Illuminate\Http\Response
     */
    public function edit(FrontModule $frontModule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FrontModule  $frontModule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FrontModule $frontModule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FrontModule  $frontModule
     * @return \Illuminate\Http\Response
     */
    public function destroy(FrontModule $frontModule)
    {
        //
    }
}
