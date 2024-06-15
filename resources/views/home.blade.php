@extends('layouts.front.app')

@section('content')
<main>
    <div id="home">
        @if(!empty($homeObj->description))
        {!! filterEditorContent($homeObj->description) !!}
        @endif
    </div>
    <div id="tasting">
        @if(!empty($tastingObj->description))
        {!! filterEditorContent($tastingObj->description) !!}
        @endif
    </div>
    <div id="our-brands">
        @if(!empty($ourBrandObj->description))
        {!! filterEditorContent($ourBrandObj->description) !!}
        @endif
    </div>

    <!-- Explore Flavors pages -->
    <div class="exploreflavorscontainer position-relative">
        <div class="headingfont text-center">Explore Flavors</div>
        <div>
            <ul class="exploremenu">
                <li onclick="shownectr1img()">NECTR BEVERAGES</li>
                <li onclick="smsshownectr1img() ">Sugarloaf Springs Beverages</li>
            </ul>
        </div>
        <div id="nectr" class="explorerowthree container w-100 position-relative">
            <div class="w-50 position-relative canimageparent">
                <img class="leftcanimage nectrrecreationimg1"
                    src="/images/Recreational beverages-20240515T123042Z-001/Recreational beverages/Nectr/Rootbeer.png"
                    alt="" />
                <img class="leftcanimage nectrrecreationimg2"
                    src="/images/Recreational beverages-20240515T123042Z-001/Recreational beverages/Nectr/orangesoda.png"
                    alt="" />
                <img class="leftcanimage nectrrecreationimg3"
                    src="/images/Recreational beverages-20240515T123042Z-001/Recreational beverages/Nectr/blueginger.png"
                    alt="" />
                <img class="leftcanimage nectrrecreationimg4"
                    src="/images/Recreational beverages-20240515T123042Z-001/Recreational beverages/Nectr/pinkbanana.png"
                    alt="" />
                <img class="leftcanimage nectrrecreationimg5"
                    src="/images/Recreational beverages-20240515T123042Z-001/Recreational beverages/Nectr/Mockups-100mgAURootBeer.png"
                    alt="" />
                <img class="leftcanimage nectrrecreationimg6"
                    src="/images/Recreational beverages-20240515T123042Z-001/Recreational beverages/Nectr/Mockups-100mgAUBlueGinger.png"
                    alt="" />
                <img class="leftcanimage nectrmedicalimg1"
                    src="/images/Medical Beverages -20240515T123045Z-001/Medical Beverages/Nectr MED/rootbeer.png"
                    alt="" />
                <img class="leftcanimage nectrmedicalimg2"
                    src="/images/Medical Beverages -20240515T123045Z-001/Medical Beverages/Nectr MED/orangesoda 100.png"
                    alt="" />
                <img class="leftcanimage nectrmedicalimg3"
                    src="/images/Medical Beverages -20240515T123045Z-001/Medical Beverages/Nectr MED/blueginger.png"
                    alt="" />
            </div>
            <div class="exploreright">
                <div class="producttitle">Nectr Soda</div>
                <div id="nectrrecreation" class="nestedexploreright">
                    <div class="categorybuttonparent">
                        <button class="categorybuttonmenu" id="yellowactivebutton1" onclick="shownectr1img()">
                            <img class="categorybuttonmenuimage"
                                src="/images/Recreational beverages-20240515T123042Z-001/Recreational beverages/Nectr/Rootbeer.png"
                                alt="" />
                            Root Beer 10mg
                        </button>
                        <button class="categorybuttonmenu" id="yellowactivebutton2" onclick="shownectr2img()">
                            <img class="categorybuttonmenuimage"
                                src="/images/Recreational beverages-20240515T123042Z-001/Recreational beverages/Nectr/orangesoda.png"
                                alt="" />
                            Orange Soda 100mg
                        </button>
                        <button class="categorybuttonmenu" id="yellowactivebutton3" onclick="shownectr3img()">
                            <img class="categorybuttonmenuimage"
                                src="/images/Recreational beverages-20240515T123042Z-001/Recreational beverages/Nectr/blueginger.png"
                                alt="" />
                            Blue Ginger 10mg
                        </button>
                        <button class="categorybuttonmenu" id="yellowactivebutton4" onclick="shownectr4img()">
                            <img class="categorybuttonmenuimage"
                                src="/images/Recreational beverages-20240515T123042Z-001/Recreational beverages/Nectr/pinkbanana.png"
                                alt="" />
                            Pink Banana 100mg
                        </button>
                        <button class="categorybuttonmenu" id="yellowactivebutton5" onclick="shownectr5img()">
                            <img class="categorybuttonmenuimage"
                                src="/images/Recreational beverages-20240515T123042Z-001/Recreational beverages/Nectr/Mockups-100mgAURootBeer.png"
                                alt="" />
                            Root Beer 100mg
                        </button>
                        <button class="categorybuttonmenu" id="yellowactivebutton6" onclick="shownectr6img()">
                            <img class="categorybuttonmenuimage"
                                src="/images/Recreational beverages-20240515T123042Z-001/Recreational beverages/Nectr/Mockups-100mgAUBlueGinger.png"
                                alt="" />
                            Blue Ginger 100mg
                        </button>
                        <!-- <button
                    class="categorybuttonmenu"
                    id="yellowactivebutton7"
                    onclick="showmedical1img()"
                  >
                    <img
                      class="categorybuttonmenuimage"
                      src="/images/Medical Beverages -20240515T123045Z-001/Medical Beverages/Nectr MED/rootbeer.png"
                      alt=""
                    />
                    Root Beer 100mg
                  </button> -->
                        <button class="categorybuttonmenu" id="yellowactivebutton8" onclick="showmedical2img()">
                            <img class="categorybuttonmenuimage"
                                src="/images/Medical Beverages -20240515T123045Z-001/Medical Beverages/Nectr MED/orangesoda 100.png"
                                alt="" />
                            Orange Soda 100mg
                        </button>
                        <!-- <button
                    class="categorybuttonmenu"
                    id="yellowactivebutton9"
                    onclick="showmedical3img()"
                  >
                    <img
                      class="categorybuttonmenuimage"
                      src="/images/Medical Beverages -20240515T123045Z-001/Medical Beverages/Nectr MED/blueginger.png"
                      alt=""
                    />
                    Blue Ginger 100mg
                  </button> -->
                    </div>
                    <a href="/nectr-beverages" class="text-decoration-none">
                        <button id="loadMoreNectr" class="lodamore">
                            Load More
                            <img src="/images/whitearrowsvg.svg" alt="Load More" />
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div id="sms" class="explorerowthree container w-100 position-relative">
            <div class="w-50 position-relative canimageparent">
                <img class="leftcanimage smsnectrrecreationimg1"
                    src="/images/Recreational beverages-20240515T123042Z-001/Recreational beverages/Sugarloaf Mountain Springs/Mockups-10mgCranLemonade.png"
                    alt="" />
                <img class="leftcanimage smsnectrrecreationimg2"
                    src="/images/Recreational beverages-20240515T123042Z-001/Recreational beverages/Sugarloaf Mountain Springs/mangopeach10.png"
                    alt="" />
                <img class="leftcanimage smsnectrrecreationimg3"
                    src="/images/Recreational beverages-20240515T123042Z-001/Recreational beverages/Sugarloaf Mountain Springs/Mockups-10mgCherryLime.png"
                    alt="" />
                <img class="leftcanimage smsnectrrecreationimg4"
                    src="/images/Recreational beverages-20240515T123042Z-001/Recreational beverages/Sugarloaf Mountain Springs/lemonade100.png"
                    alt="" />
                <img class="leftcanimage smsnectrrecreationimg5"
                    src="/images/Recreational beverages-20240515T123042Z-001/Recreational beverages/Sugarloaf Mountain Springs/cherrylime100.png"
                    alt="" />
                <img class="leftcanimage smsnectrmedicalimg1"
                    src="/images/Medical Beverages -20240515T123045Z-001/Medical Beverages/Sugarloaf Springs Med/lemonade100.png"
                    alt="" />
                <img class="leftcanimage smsnectrmedicalimg2"
                    src="/images/Medical Beverages -20240515T123045Z-001/Medical Beverages/Sugarloaf Springs Med/mangopeach100.png"
                    alt="" />
            </div>
            <div class="exploreright">
                <div class="producttitle">Sugarloaf Seltzers</div>

                <div id="smsrecreation" class="nestedexploreright">
                    <div class="categorybuttonparent">
                        <button onclick="smsshownectr1img()" class="categorybuttonmenu" id="yellowactivebutton11">
                            <img class="categorybuttonmenuimage"
                                src="/images/Recreational beverages-20240515T123042Z-001/Recreational beverages/Sugarloaf Mountain Springs/Mockups-10mgCranLemonade.png"
                                alt="" />
                            Cranberry Lemonade 10mg
                        </button>
                        <button class="categorybuttonmenu" onclick="smsshownectr2img()" id="yellowactivebutton12">
                            <img class="categorybuttonmenuimage"
                                src="/images/Recreational beverages-20240515T123042Z-001/Recreational beverages/Sugarloaf Mountain Springs/mangopeach10.png"
                                alt="" />
                            Mango Peach 10mg</button><button onclick="smsshownectr3img()" class="categorybuttonmenu"
                            id="yellowactivebutton13">
                            <img class="categorybuttonmenuimage"
                                src="/images/Recreational beverages-20240515T123042Z-001/Recreational beverages/Sugarloaf Mountain Springs/Mockups-10mgCherryLime.png"
                                alt="" />
                            Cherry Lime 10mg
                        </button>
                        <!-- <button
                    onclick="smsshownectr4img()"
                    class="categorybuttonmenu"
                    id="yellowactivebutton14"
                  >
                    <img
                      class="categorybuttonmenuimage"
                      src="/images/Recreational beverages-20240515T123042Z-001/Recreational beverages/Sugarloaf Mountain Springs/lemonade100.png"
                      alt=""
                    />
                    Cranberry Lemonade 100mg
                  </button> -->
                        <button onclick="smsshownectr5img()" class="categorybuttonmenu" id="yellowactivebutton15">
                            <img class="categorybuttonmenuimage"
                                src="/images/Recreational beverages-20240515T123042Z-001/Recreational beverages/Sugarloaf Mountain Springs/cherrylime100.png"
                                alt="" />
                            Cherry Lime 100mg
                        </button>
                        <button onclick="smsshowmedical1img()" class="categorybuttonmenu" id="yellowactivebutton16">
                            <img class="categorybuttonmenuimage"
                                src="/images/Medical Beverages -20240515T123045Z-001/Medical Beverages/Sugarloaf Springs Med/lemonade100.png"
                                alt="" />
                            Cranberry Lemonade 100mg
                        </button>
                        <button onclick="smsshowmedical2img()" class="categorybuttonmenu" id="yellowactivebutton17">
                            <img class="categorybuttonmenuimage"
                                src="/images/Medical Beverages -20240515T123045Z-001/Medical Beverages/Sugarloaf Springs Med/mangopeach100.png"
                                alt="" />
                            Mango Peach 100mg
                        </button>
                    </div>
                    <a href="/sugerloaf-springs" class="text-decoration-none">
                        <button id="loadMoreSms" class="lodamore">
                            Load More
                            <img src="/images/whitearrowsvg.svg" alt="" />
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <img class="explorerighthill" src="/images/explorehill.svg" alt="" />
    </div>
</main>
@endsection

@push('page_scripts')
<script src="{{ asset('js/public/home.js') }}"></script>
@endpush