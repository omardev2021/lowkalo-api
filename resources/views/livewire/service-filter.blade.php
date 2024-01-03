<div>

    <style>
        /*.fixTableHead {*/
        /*    overflow-y: auto;*/

        /*}*/

        .fixTableHead tr th {
            position: sticky;
            position: -webkit-sticky;


            top: 0;
        }
    </style>

{{--    <h1 class="top-head text-center mt-4"> Loyalty Features</h1>--}}

{{--    <div class="container swiper mySwiper2" style="margin-bottom: -100px">--}}
{{--        <div class="swiper-wrapper d-flex mb-3 text-center pb-5 pt-5 pr-4" style="gap: 10px;margin-top: 5%;margin-left: 13%">--}}
{{--            <div class="swiper-slide">--}}
{{--                <button class="btn-bg-active" >Gathering Tools</button>--}}
{{--            </div>--}}
{{--            <div class="swiper-slide">--}}
{{--                <button class="btn-bg-none" >Demo and Trial Versions</button>--}}
{{--            </div>--}}
{{--            <div class="swiper-slide">--}}
{{--                <button class="btn-bg-none" >Security and Compliance Assessment</button>--}}
{{--            </div>--}}
{{--            <div class="swiper-slide">--}}
{{--                <button class="btn-bg-none" >Vendor Evaluation Scorecards</button>--}}
{{--            </div>--}}
{{--            <div class="swiper-slide">--}}
{{--                <button class="btn-bg-none" >User Reviews and Case Studies</button>--}}
{{--            </div>--}}
{{--            <div class="swiper-slide">--}}
{{--                <button class="btn-bg-none" >Mobile Functionality</button>--}}
{{--            </div>--}}

{{--            <div class="swiper-slide">--}}
{{--                <button class="btn-bg-none" >Hardware Compatibility</button>--}}
{{--            </div>--}}

{{--            <div class="swiper-slide">--}}
{{--                <button class="btn-bg-none" >Cost Analysis</button>--}}
{{--            </div>--}}

{{--            <div class="swiper-slide">--}}
{{--                <button class="btn-bg-none" >How easy is the set up </button>--}}
{{--            </div>--}}


{{--        </div>--}}
{{--        <div class="swiper-button-next"></div>--}}
{{--        <div class="swiper-button-prev"></div>--}}
{{--        <div class="swiper-pagination"></div>--}}
{{--    </div>--}}
{{--    <div class="container swiper mySwiper">--}}
{{--        <div class="swiper-wrapper d-flex mb-3 text-center pb-5 pt-5 pr-4" style="gap: 10px;margin-top: 5%;margin-left: 13%">--}}
{{--            <div class="swiper-slide">--}}
{{--                <button class="btn-bg-active" >Gathering Tools</button>--}}
{{--            </div>--}}
{{--            <div class="swiper-slide">--}}
{{--                <button class="btn-bg-active" >Demo and Trial Versions</button>--}}
{{--            </div>--}}
{{--            <div class="swiper-slide">--}}
{{--                <button class="btn-bg-active" >Security and Compliance Assessment</button>--}}
{{--            </div>--}}
{{--            <div class="swiper-slide">--}}
{{--                <button class="btn-bg-none" >Vendor Evaluation Scorecards</button>--}}
{{--            </div>--}}
{{--            <div class="swiper-slide">--}}
{{--                <button class="btn-bg-none" >User Reviews and Case Studies</button>--}}
{{--            </div>--}}
{{--            <div class="swiper-slide">--}}
{{--                <button class="btn-bg-none" >Mobile Functionality</button>--}}
{{--            </div>--}}

{{--            <div class="swiper-slide">--}}
{{--                <button class="btn-bg-none" >Hardware Compatibility</button>--}}
{{--            </div>--}}

{{--            <div class="swiper-slide">--}}
{{--                <button class="btn-bg-none" id="fourthbutton" onclick="fourth()">Cost Analysis</button>--}}
{{--            </div>--}}

{{--            <div class="swiper-slide">--}}
{{--                <button class="btn-bg-none" id="fourthbutton" onclick="fourth()">How easy is the set up </button>--}}
{{--            </div>--}}


{{--        </div>--}}
{{--        <div class="swiper-button-next"></div>--}}
{{--        <div class="swiper-button-prev"></div>--}}
{{--        <div class="swiper-pagination"></div>--}}
{{--    </div>--}}



    <div class="container">


        {{--        <h1 class="top-head"> Vendor Scorecard : <span class="top-span">Spend Management & Corporate Cards</span></h1>--}}
        <div class="row justify-content-center" >
            <p class="top-head-2 mt-4">Based on interviews with software buyers who recently evaluated spend management & corporate cards solutions</p>

            <div class="col-12 col-lg-12 col-xl-12 col-xxl-12 position-relative">
                <div class="d-inline-block mb-4">
                    <button wire:click="control"  class="filter-button2" >
                        <i class="bi bi-layout-text-sidebar mx-2"></i> Filters
                    </button>
                </div>
                <div class="sidebar-filter cus_scrollbar sidebar-xxl-fixed show" x-data="{ show: @entangle('showModal')}" x-show="show" style="display: none;position:absolute;top: 70px">
                    <div class="sidebar-filter__part">
                        <h4 class="sidebar-filter__title">Filter</h4>
                    </div>
                    <div class="sidebar-filter__part">
                        <h5 class="sidebar-filter__part-title">Solutions and options available in loyalty programs</h5>
                        <ul class="query">

                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="mortgage_loan" id="querypersonal" checked="" wire:model="programs">
                                    <label for="querypersonal">Loyalty programs (incentives mode)</label>
                                </div>

                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_student" id="queryStudent" checked="" wire:model="setup">
                                    <label for="queryStudent">Program Set up</label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="queryBusiness" checked="" wire:model="target">
                                    <label for="queryBusiness">Target Audience</label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_home" id="queryHome" checked="" wire:model="member">
                                    <label for="queryHome">Member Based Loyalty Program</label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_debt" id="queryDebt" checked="" wire:model="identifier">
                                    <label for="queryDebt">Membership Identifier</label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_construction" id="queryConstruction" checked="" wire:model="channel">
                                    <label for="queryConstruction">Types Based on Channel</label>
                                </div>
                            </li>
{{--                            <li class="query__list">--}}
{{--                                <div class="query__label">--}}
{{--                                    <input type="checkbox" name="reporting" id="reporting" checked="" wire:model="report">--}}
{{--                                    <label for="reporting">Reporting and Analytics</label>--}}
{{--                                </div>--}}
{{--                            </li>--}}
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="location" id="location" checked="" wire:model="price">
                                    <label for="location">Price for one location</label>
                                </div>
                            </li>
{{--                            <li class="query__list">--}}
{{--                                <div class="query__label">--}}
{{--                                    <input type="checkbox" name="reviews" id="reviews" checked="" wire:model="rev">--}}
{{--                                    <label for="reviews">Reviews</label>--}}
{{--                                </div>--}}
{{--                            </li>--}}
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="push" id="push" checked="" wire:model="com">
                                    <label for="push">Communication Channels Push Notifications</label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="supported" id="supported" checked="" wire:model="lang">
                                    <label for="supported">Language Supported</label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="link" id="link" checked="" wire:model="link">
                                    <label for="link">الربط مع الانظمة الاخرى</label>
                                </div>
                            </li>
{{--                            <li class="query__list">--}}
{{--                                <div class="query__label">--}}
{{--                                    <input type="checkbox" name="customization" id="customization" checked="" wire:model="cus">--}}
{{--                                    <label for="customization">Customization</label>--}}
{{--                                </div>--}}
{{--                            </li>--}}

                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_equipment" id="queryEquipment" checked="" wire:model="customers">
                                    <label for="queryEquipment">Existing Customer</label>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <div class="sidebar-filter__part">
                        <h5 class="sidebar-filter__part-title">Filter By Features</h5>
                        <h5 class="sidebar-filter__part-title" style="font-size: 16px">Loyalty programs (incentives mode)
                        </h5>
                        <ul class="query">

                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="mortgage_loan" id="programs1" checked="" wire:model="programs1">
                                    <label for="programs1">Points-Based
                                    </label>
                                </div>

                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_student" id="programs2" checked="" wire:model="programs2">
                                    <label for="programs2">Gift-Card

                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="programs3" checked="" wire:model="programs3">
                                    <label for="programs3">Punch-Card

                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="programs4" checked="" wire:model="programs4">
                                    <label for="programs4">Prepaid-Card


                                    </label>
                                </div>
                            </li>

                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="programs5" checked="" wire:model="programs5">
                                    <label for="programs5">Stamp card



                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="programs6" checked="" wire:model="programs6">
                                    <label for="programs6">Multi Stamp Card



                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="programs7" checked="" wire:model="programs7">
                                    <label for="programs7">Family & Friends card



                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="programs8" checked="" wire:model="programs8">
                                    <label for="programs8">VIP Card



                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="programs9" checked="" wire:model="programs9">
                                    <label for="programs9">Discount Card



                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="programs10" checked="" wire:model="programs10">
                                    <label for="programs10">Cash back Card



                                    </label>
                                </div>
                            </li>     <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="programs11" checked="" wire:model="programs11">
                                    <label for="programs11">Segment card (Bronz/ silver/ gold)


                                    </label>
                                </div>
                            </li>     <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="programs12" checked="" wire:model="programs12">
                                    <label for="programs12">Coupon and Voucher (Single USE)


                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="programs13" checked="" wire:model="programs13">
                                    <label for="programs13">Event ticket


                                    </label>
                                </div>
                            </li>
                            <h5 class="sidebar-filter__part-title mt-3" style="font-size: 16px">Program Set up

                            </h5>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="setup1" checked="" wire:model="setup1">
                                    <label for="setup1">Single-Brand Loyalty Programs



                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="setup2" checked="" wire:model="setup2">
                                    <label for="setup2">Multi-Brands Loyalty Programs



                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="setup3" checked="" wire:model="setup3">
                                    <label for="setup3">Multi Partner and Brands Loyalty Programs




                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="setup4" checked="" wire:model="setup4">
                                    <label for="setup4">Programs
                                        Through Digital Wallet



                                    </label>
                                </div>
                            </li>

                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="setup5" checked="" wire:model="setup5">
                                    <label for="setup5">Points are locked to your brand, customers can only redeem your points at your store




                                    </label>
                                </div>
                            </li>
                            <h5 class="sidebar-filter__part-title mt-3" style="font-size: 16px">Target Audience


                            </h5>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="target1" checked="" wire:model="target1">
                                    <label for="target1">B2C (Business to Customer) Loyalty Programs





                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="target2" checked="" wire:model="target2">
                                    <label for="target2">B2B (Business to Business) Loyalty Programs





                                    </label>
                                </div>
                            </li>


                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="target3" checked="" wire:model="target3">
                                    <label for="target3">B2B2C (Business to Business to Customers) Loyalty Programs






                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="target4" checked="" wire:model="target4">
                                    <label for="target4">B2E (Business to Employees) Loyalty Programs






                                    </label>
                                </div>
                            </li>
                            <h5 class="sidebar-filter__part-title mt-3" style="font-size: 16px">Member Based Loyalty Program



                            </h5>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="member1" checked="" wire:model="member1">
                                    <label for="member1">Non-Paid Membership






                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="member2" checked="" wire:model="member2">
                                    <label for="member2">Tier-Level-Based







                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="member3" checked="" wire:model="member3">
                                    <label for="member3">Loyalty Programs without Status Levels





                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="member4" checked="" wire:model="member4">
                                    <label for="member4">Membership card





                                    </label>
                                </div>
                            </li>

                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="member5" checked="" wire:model="member5">
                                    <label for="member5">No membership






                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="member6" checked="" wire:model="member6">
                                    <label for="member6">No membership But there is tiering






                                    </label>
                                </div>
                            </li>

                            <h5 class="sidebar-filter__part-title mt-3" style="font-size: 16px">Membership Identifier
                            </h5>

                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="identifier1" checked="" wire:model="identifier1">
                                    <label for="identifier1">Plastic-Card-Based Loyalty Programs







                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="identifier2" checked="" wire:model="identifier2">
                                    <label for="identifier2">Digital-Card-Based Loyalty Programs







                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="identifier3" checked="" wire:model="identifier3">
                                    <label for="identifier3">Programs With Any Other Member Identifier (e.g. mobile number)







                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="identifier4" checked="" wire:model="identifier4">
                                    <label for="identifier4">Digital wallet







                                    </label>
                                </div>
                            </li>

                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="identifier5" checked="" wire:model="identifier5">
                                    <label for="identifier5">Application ( need to download application )








                                    </label>
                                </div>
                            </li>


                            <h5 class="sidebar-filter__part-title mt-3" style="font-size: 16px">Types Based on Channel

                            </h5>

                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="channel1" checked="" wire:model="channel1">
                                    <label for="channel1">Offline

                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="channel2" checked="" wire:model="channel2">
                                    <label for="channel2">Online








                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="channel3" checked="" wire:model="channel3">
                                    <label for="channel3">Omni Loyalty Programs







                                    </label>
                                </div>
                            </li>


                            <h5 class="sidebar-filter__part-title mt-3" style="font-size: 16px">Communication Channels Push Notifications


                            </h5>

                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="com1" checked="" wire:model="com1">
                                    <label for="com1">Unlimited free notification to customers about offers, promotions and news


                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="com2" checked="" wire:model="com2">
                                    <label for="com2">Automated notifications on customers birthday


                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="com3" checked="" wire:model="com3">
                                    <label for="com3">GPS location based when customers close from your locations


                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="com4" checked="" wire:model="com4">
                                    <label for="com4">Extra Points


                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="com5" checked="" wire:model="com5">
                                    <label for="com5">Easy to Use CRM


                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="com6" checked="" wire:model="com6">
                                    <label for="com6">Works on both IPhone and Andriod


                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="com7" checked="" wire:model="com7">
                                    <label for="com7">القسائم الشرائية من عميل لاخر


                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="com8" checked="" wire:model="com8">
                                    <label for="com8">Gift Card بطاقات الهدايا people could send gift card to each other and bond with friends


                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="com9" checked="" wire:model="com9">
                                    <label for="com9">Unlimited free push notifications to do “flash sales” of new items or to launch new restaurants


                                    </label>
                                </div>
                            </li>

                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="com10" checked="" wire:model="com10">
                                    <label for="com10">خدمة الرسائل النصية SMS



                                    </label>
                                </div>
                            </li>

                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="com11" checked="" wire:model="com11">
                                    <label for="com11">مشاركة النقاط كهدايا


                                    </label>
                                </div>
                            </li>

                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="com12" checked="" wire:model="com12">
                                    <label for="com12">Push Notification to all users


                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="com13" checked="" wire:model="com13">
                                    <label for="com13">Scheduled through the app

                                    </label>
                                </div>
                            </li>

                            <h5 class="sidebar-filter__part-title mt-3" style="font-size: 16px">Language Supported



                            </h5>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="lang1" checked="" wire:model="lang1">
                                    <label for="lang1">English

                                    </label>
                                </div>
                            </li>          <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="lang2" checked="" wire:model="lang2">
                                    <label for="lang2">Arabic

                                    </label>
                                </div>
                            </li>
                            <h5 class="sidebar-filter__part-title mt-3" style="font-size: 16px">الربط مع الانظمة الاخرى




                            </h5>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="link1" checked="" wire:model="link1">
                                    <label for="link1">فودكس

                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="link2" checked="" wire:model="link2">
                                    <label for="link2">مرن

                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="link3" checked="" wire:model="link3">
                                    <label for="link3">رتم

                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="link4" checked="" wire:model="link4">
                                    <label for="link4">Odoo

                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="link5" checked="" wire:model="link5">
                                    <label for="link5">سكوير

                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="link6" checked="" wire:model="link6">
                                    <label for="link6">سلة

                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="link7" checked="" wire:model="link7">
                                    <label for="link7">زد

                                    </label>
                                </div>
                            </li>

                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="link8" checked="" wire:model="link8">
                                    <label for="link8">wosul

                                    </label>
                                </div>
                            </li>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="link9" checked="" wire:model="link9">
                                    <label for="link9">Dash

                                    </label>
                                </div>
                            </li>

                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="link10" checked="" wire:model="link10">
                                    <label for="link10">Easacc

                                    </label>
                                </div>
                            </li>

                            <h5 class="sidebar-filter__part-title mt-3" style="font-size: 16px">Based on location



                            </h5>
                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="Saudi" checked="" wire:model="loc1">
                                    <label for="Saudi">Saudi Arabia

                                    </label>
                                </div>
                            </li>

                            <li class="query__list">
                                <div class="query__label">
                                    <input type="checkbox" name="query_business" id="UAE" checked="" wire:model="loc2">
                                    <label for="UAE">UAE

                                    </label>
                                </div>
                            </li>

                    </div>

                    <div class="sidebar-filter__part3 text-center">
                        <button wire:click="reser_filters"  class="filter-button3 w-100" >
                        Reset Filters
                        </button>
                    </div>
                </div>
            </div>





            <div class="col-12 col-lg-12 col-xl-12 col-xxl-12 p-4 fixTableHead" style="z-index: 1;overflow-x: scroll">
                <table style="z-index: 1">

                    <div class="col-sm-2">

                        <tr>

                            <th class="table-header"><h4 class="her">Features</h4></th>


{{--                            <th  class="table-header">--}}
{{--                                <input type="checkbox" id="dessert-1" wire:model="333"/>--}}
{{--                                <label for="dessert-1">--}}
{{--                                    <img src="{{asset('/images/202304090704m0.webp')}}"  width="100" height="100" srcset="">--}}
{{--                                </label>--}}



{{--                            </th>--}}
                            @if($brand1)
                            <th  class="table-header">

                                    <img src="{{asset('/images/mukafaat-loyalty-logo.webp')}}"  width="100" height="100" srcset="">




                            </th>
                            @endif
                            @if($brand2)
                            <th class="table-header">

                                    <img src="{{asset('/images/resal-logo.jpeg')}}" width="100" height="100" srcset="">



                            </th>
                            @endif
                            @if($brand3)
                            <th class="table-header">


                                    <img src="{{asset('/images/brandwallet-logo.jpg')}}"  width="100" height="100" srcset="">                                </label>
                            </th>
                            @endif
                                @if($brand4)
                            <th class="table-header">


                                    <img src="{{asset('/images/bonat-logo.webp')}}"  width="100" height="100" srcset="">

                            </th>
                            @endif
                            @if($brand5)
                            <th class="table-header">

                                    <img src="{{asset('/images/nugttah-logo.png')}}"  width="100" height="100" srcset="">

                            </th>
                            @endif
                            @if($brand6)
                            <th class="table-header">

                                    <img src="{{asset('/images/koinz-loyalty-logo.webp')}}"  width="100" height="100" srcset="">

                            </th>
                            @endif
                            @if($brand7)
                            <th class="table-header">

                                    <img src="{{asset('/images/abkhus-logo.jpg')}}"  width="100" height="100" srcset="">                                </label>
                            </th>
                            @endif
                                @if($brand8)
                            <th class="table-header"><img src="{{asset('/images/upp-logo.jpg')}}"  width="100" height="100" srcset=""></th>
                            @endif
                            @if($brand9)
                            <th class="table-header">

                                    <img src="{{asset('/images/greenbill-logo.webp')}}"  width="100" height="100" srcset="">                                </label>
                            </th>

                            @endif

                            <th class="table-header"><img src="{{asset('/images/swan-logo.jpg')}}"  width="100" height="100" srcset=""></th>

                            <th class="table-header"><img src="{{asset('/images/loyapro-logo.webp')}}"  width="100" height="100" srcset=""></th>

                            <th class="table-header"><img src="{{asset('/images/fitticoin-logo.webp')}}"  width="100" height="100" srcset=""></th>



                            <th class="table-header"><img src="{{asset('/images/florinz-logo.jpg')}}"  width="100" height="100" srcset=""></th>

                            <th class="table-header"><img src="{{asset('/images/unipal-logo.jpg')}}"  width="100" height="100" srcset=""></th>
                            <th class="table-header"><img src="{{asset('/images/giftcardspy-logo.png')}}"  width="100" height="100" srcset=""></th>
                            <th class="table-header"><img src="{{asset('/images/ecopon-logo.jpg')}}"  width="100" height="100" srcset=""></th>
                            <th class="table-header"><img src="{{asset('/images/sdc-logo.png')}}"  width="100" height="100" srcset=""></th>
                            <th class="table-header"><img src="{{asset('/images/mozaic-logo.jpeg')}}"  width="100" height="100" srcset=""></th>


                        </tr>
                        <tr>

                            <td style="font-weight: bold">
                                Overall satisfaction score
                            </td>
                            @if($brand1)
                            <td>   <h2 class="score"><span class="scorew">7.5</span> / 10</h2>
                               </td>
                            @endif
                            @if($brand2)
                            <td>   <h2 class="score"><span class="scorew">7.5</span> / 10</h2>
                            </td>
                            @endif
                            @if($brand3)
                            <td>   <h2 class="score"><span class="scorew">7.5</span> / 10</h2>
                            </td>
                            @endif
                            @if($brand4)
                            <td>   <h2 class="score"><span class="scorew">7.5</span> / 10</h2>
                            </td>
                            @endif
                                @if($brand5)
                            <td>   <h2 class="score"><span class="scorew">7.5</span> / 10</h2>
                            </td>
                                @endif
                                @if($brand6)
                            <td>   <h2 class="score"><span class="scorew">7.5</span> / 10</h2>
                            </td>
                                @endif
                                @if($brand7)
                            <td>   <h2 class="score"><span class="scorew">7.5</span> / 10</h2>
                            </td>
                                @endif
                                @if($brand8)
                            <td>   <h2 class="score"><span class="scorew">7.5</span> / 10</h2>
                            </td>
                                @endif
                                @if($brand9)
                            <td>   <h2 class="score"><span class="scorew">7.5</span> / 10</h2>
                            </td>
                                @endif
                            <td>   <h2 class="score"><span class="scorew">7.5</span> / 10</h2>
                            </td>
                            <td>   <h2 class="score"><span class="scorew">7.5</span> / 10</h2>
                            </td>
                            <td>   <h2 class="score"><span class="scorew">7.5</span> / 10</h2>
                            </td>
                            <td>   <h2 class="score"><span class="scorew">7.5</span> / 10</h2>
                            </td>
                            <td>   <h2 class="score"><span class="scorew">7.5</span> / 10</h2>
                            </td>
                            <td>   <h2 class="score"><span class="scorew">7.5</span> / 10</h2>
                            </td>

                            <td>   <h2 class="score"><span class="scorew">7.5</span> / 10</h2>
                            </td>
                            <td>   <h2 class="score"><span class="scorew">7.5</span> / 10</h2>
                            </td>

                            <td>   <h2 class="score"><span class="scorew">7.5</span> / 10</h2>
                            </td>

                        </tr>

@if($programs)
                        <tr>

                            <td style="font-weight: bold">Loyalty programs (incentives mode)
                            </td>
                            @if($brand1)
                            <td>      <ul>
                                    <li>Points-Based</li>
                                    <li>Gift-Card</li>
                                    <li>Punch-Card</li>
                                    <li>Prepaid-Card</li>
                                    <li>Any combination of the above</li>

                                </ul></td>
                            @endif
                            @if($brand2)

                            <td>     <ul>
                                    <li>Points-Based</li>
                                    <li>Punch Card</li>
                                    <li>Gift-Card (Famous for this especially for Companies and separate from the loyalty program)</li>
                                    <li>Combination between point based and tier based</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand3)
                            <td>     <ul>
                                    <li>Stamp card</li>
                                    <li>Multi Stamp Card</li>
                                    <li>Prepaid card</li>
                                    <li>Points Based</li>
                                    <li>Family & Friends card</li>
                                    <li>VIP Card</li>
                                    <li>Discount Card</li>
                                    <li>Cash back Card</li>
                                    <li>Gift card</li>
                                    <li>Segment card (Bronz/ silver/ gold)</li>
                                    <li>Coupon and Voucher (Single USE)</li>
                                    <li>Event ticket (an easy to use ticketing and invitation solution for Private event)</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand4)
                            <td>     <ul>

                                    <li>Points Based</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand5)
                            <td>     <ul>

                                    <li>Points Based</li>
                                    <li>Stamp Card </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand6)
                            <td>     <ul>

                                    <li>Points Based</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand7)
                            <td>     <ul>

                                    <li>Points Based</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand8)
                            <td>     <ul>

                                    <li>Points Based</li>
                                    <li>Stamp Card </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand9)
                            <td>     <ul>

                                    <li>Stamp Card</li>
                                    <li>point Based(this requires the phone number for the client, which may take longer to process the order and print the receipt</li>

                                </ul>
                            </td>
                            @endif
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>

                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>


                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>

                        </tr>
                        @endif

                        @if($setup)
                        <tr>

                            <td style="font-weight: bold">Program Set up
                            </td>
                            @if($brand1)
                            <td>
                                <ul>
                                    <li>Single-Brand Loyalty Programs</li>
                                    <li>Multi-Brands Loyalty Programs</li>
                                    <li>Multi Partner and Brands Loyalty Programs</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand2)
                            <td>
                                <ul>
                                    <li>Single-Brand Loyalty Programs</li>
                                    <li>Through Digital Wallet بطاقة رقمية</li>
                                    <li>Not An application</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand3)
                            <td>
                                <ul>
                                    <li>-</li>

                                </ul>
                            </td>
                            @endif
                            @if($brand4)
                            <td>
                                <ul>
                                    <li>Single-Brand Loyalty Programs</li>

                                </ul>
                            </td>
                            @endif
                            @if($brand5)
                            <td>     <ul>

                                    <li>Single-Brand Loyalty Programs
                                        </li>
                                    <li>Points are locked to your brand, customers can only redeem your points at your store</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand6)
                            <td>     <ul>

                                    <li>Single-Brand Loyalty Programs</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand7)
                            <td>     <ul>

                                    <li>Multi-Brands Loyalty Programs</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand8)

                            <td>     <ul>

                                    <li>Single-Brand Loyalty Programs</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand9)
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            @endif
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>

                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>

                        </tr>
                        @endif

                        @if($target)
                        <tr>

                            <td style="font-weight: bold">Target Audience
                            </td>
                            @if($brand1)
                            <td>
                                <ul>

                                    <li>B2C (Business to Customer) Loyalty Programs</li>
                                    <li>B2B (Business to Business) Loyalty Programs</li>
                                    <li>B2B2C (Business to Business to Customers) Loyalty Programs</li>
                                    <li>B2E (Business to Employees) Loyalty Programs</li>

                                </ul>
                            </td>
                            @endif
                            @if($brand2)
                            <td>
                                <ul>
                                    <li>B2C (Business to Customer) Loyalty Programs
                                    </li>

                                    <li>B2B (Business to Business) Gift Card</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand3)
                            <td>
                                <ul>
                                    <li>B2C (Business to Customer) Loyalty Programs</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand4)
                            <td>
                                <ul>
                                    <li>B2C (Business to Customer) Loyalty Programs</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand5)
                            <td>     <ul>

                                    <li>B2C (Business to Customer) Loyalty Programs</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand6)
                            <td>     <ul>

                                    <li>B2C (Business to Customer) Loyalty Programs</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand7)
                            <td>     <ul>

                                    <li>B2C (Business to Customer) Loyalty Programs</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand8)

                            <td>     <ul>

                                    <li>B2C (Business to Customer) Loyalty Programs</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand9)
                            <td>     <ul>

                                    <li>B2C (Business to Customer) Loyalty Programs</li>
                                </ul>
                            </td>
                            @endif
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>

                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>

                        </tr>
                        @endif

                        @if($member)
                        <tr>

                            <td style="font-weight: bold">Member Based Loyalty Program
                            </td>
                            @if($brand1)
                            <td>
                                <ul>
                                    <li>Non-Paid Membership</li>
                                    <li>Tier-Level-Based</li>
                                    <li>Loyalty Programs without Status Levels</li>
                                    <li>Any combination of the above</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand2)
                            <td>
                                <ul>
                                    <li>-</li>

                                </ul>
                            </td>
                            @endif
                            @if($brand3)
                            <td>
                                <ul>
                                    <li>Membership card (Double check if it's paid or not paid)</li>
                                    <li>Tier-Level-Based</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand4)
                            <td>
                                <ul>
                                    <li>-</li>

                                </ul>
                            </td>
                            @endif
                            @if($brand5)

                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand6)
                            <td>     <ul>

                                    <li>No Membership</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand7)
                            <td>     <ul>

                                    <li>No membership
                                        But there is tiering  </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand8)
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand9)
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            @endif
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>

                        </tr>
                        @endif
                        @if($identifier)

                        <tr>

                            <td style="font-weight: bold">Membership Identifier
                            </td>
                            @if($brand1)
                            <td>
                                <ul>
                                    <li>Plastic-Card-Based Loyalty Programs</li>
                                    <li>Digital-Card-Based Loyalty Programs</li>
                                    <li>Programs With Any Other Member Identifier (e.g. mobile number)</li>
                                    <li>Any combination of the above</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand2)
                            <td>
                                <ul>
                                    <li>Digital wallet </li>

                                </ul>
                            </td>
                            @endif
                            @if($brand3)
                            <td>
                                <ul>
                                    <li>Digital wallet </li>

                                </ul>
                            </td>
                            @endif
                            @if($brand4)
                            <td>
                                <ul>
                                    <li>Application
                                        ( need to download application ) </li>

                                </ul>
                            </td>
                            @endif
                            @if($brand5)
                            <td>     <ul>

                                    <li>Application
                                        ( need to download application)</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand6)
                            <td>     <ul>

                                    <li>Application
                                        ( need to download application)</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand7)
                            <td>     <ul>

                                    <li>Application
                                        ( need to download application)</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand8)
                            <td>     <ul>

                                    <li>Digital Wallet </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand9)
                            <td>     <ul>

                                    <li>Digital Card based
                                        ( where customer will scan the qr code through their app)
                                         </li>
                                    <li>Application</li>
                                </ul>
                            </td>
                            @endif
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>

                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>

                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                        </tr>
                        @endif

                        @if($channel)
                        <tr>

                            <td style="font-weight: bold">Types Based on Channel
                            </td>
                            @if($brand1)
                            <td>
                                <ul>
                                    <li>Offline</li>
                                    <li>Online</li>
                                    <li>Omni Loyalty Programs</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand2)
                            <td>
                                <ul>
                                    <li style="list-style: none">-</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand3)
                            <td>
                                <ul>
                                    <li>Offline</li>
                                    <li>Online</li>
                                    <li>Omni Loyalty Programs</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand4)
                            <td>
                                <ul>
                                    <li>Online</li>

                                </ul>
                            </td>
                            @endif
                            @if($brand5)
                            <td>     <ul>

                                    <li>Online</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand6)
                            <td>     <ul>

                                    <li>Offline</li>
                                    <li>Online</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand7)
                            <td>     <ul>

                                    <li>Offline</li>
                                    <li>Online</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand8)
                            <td>     <ul>

                                    <li>Offline</li>
                                    <li>Online</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand9)
                            <td>     <ul>

                                    <li>Online</li>
                                </ul>
                            </td>
                            @endif
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>

                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                        </tr>
                        @endif
                        @if($price)
                        <tr>

                            <td style="font-weight: bold">Price for one location
                            </td>
                            @if($brand1)
                                <td>
                                    <ul>
                                        <li>-
                                             </li>

                                    </ul>
                                </td>
                            @endif
                            @if($brand2)

                            <td>
                                <ul>
                                    <li style="list-style: none">
                                        1450
                                        +
                                        750 for each new branch </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand3)
                            <td>
                                <ul>
                                    <li>main branch: 2,750
                                        no extra cost for additional branch  </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand3)
                            <td>
                                <ul>
                                    <li>SA141 /month/branch

                                    </li>
                                    <li>
                                        1692/ year/ branch
                                    </li>

                                </ul>
                            </td>
                            @endif
                            @if($brand4)
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand5)
                            <td>     <ul>

                                    <li>-
                                    </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand6)
                            <td>     <ul>

                                    <li>free
                                    </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand7)
                            <td>     <ul>

                                    <li>$28/ month up 2branches
                                        $25/ month up to 3-6
                                        7-50 20/ brnach  </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand8)
                            <td>     <ul>

                                    <li>main branch: 2,500
                                        2nd Branch: 600 </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand9)
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            @endif
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>

                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                        </tr>
                        @endif
{{--                        @if($report)--}}
{{--                        <tr>--}}

{{--                            <td style="font-weight: bold">Reporting and Analytics--}}
{{--                            </td>--}}

{{--                            <td>--}}
{{--                                <ul>--}}
{{--                                    <li>---}}
{{--                                    </li>--}}

{{--                                </ul>--}}
{{--                            </td>--}}

{{--                            <td>--}}
{{--                                <ul>--}}
{{--                                    <li>---}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}

{{--                            <td>--}}
{{--                                <ul>--}}
{{--                                    <li>---}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}

{{--                            <td>--}}
{{--                                <ul>--}}
{{--                                    <li>---}}
{{--                                    </li>--}}

{{--                                </ul>--}}
{{--                            </td>--}}

{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}

{{--                            <td>     <ul>--}}

{{--                                    <li>---}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>---}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}

{{--                            <td>     <ul>--}}

{{--                                    <li>---}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        @endif--}}
{{--                        @if($rev)--}}
{{--                        <tr>--}}

{{--                            <td style="font-weight: bold">Reviews--}}
{{--                            </td>--}}

{{--                            <td>--}}
{{--                                <ul>--}}
{{--                                    <li>---}}
{{--                                    </li>--}}

{{--                                </ul>--}}
{{--                            </td>--}}

{{--                            <td>--}}
{{--                                <ul>--}}
{{--                                    <li>---}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}

{{--                            <td>--}}
{{--                                <ul>--}}

{{--                                    <li>تتيح لك لوحة التحكم فهم سلوك عملائك الشرائي مثل أوقات زياراتهم ومنتجاتهم المفضلة مع تقسيمهم الى شرائح لاستهدافهم واتخاذ قرارات بشكل أفضل--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}

{{--                            <td>--}}
{{--                                <ul>--}}
{{--                                    <li>متوفرة بعد تسليم طلب العميل--}}
{{--                                    </li>--}}

{{--                                </ul>--}}
{{--                            </td>--}}

{{--                            <td>     <ul>--}}

{{--                                    <li>متوفرة بعد تسليم طلب العميل </li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}

{{--                            <td>     <ul>--}}

{{--                                    <li>متوفرة بعد تسليم طلب العميل--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>لايوجد خاصية توفر التقيمات--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>tHERE'S--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>---}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}

{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        @endif--}}
                        @if($com)
                        <tr>

                            <td style="font-weight: bold">Communication Channels Push Notifications
                            </td>
                            @if($brand1)
                            <td>
                                <ul>
                                    <li>-
                                    </li>

                                </ul>
                            </td>
                            @endif
                            @if($brand2)
                            <td>
                                <ul>
                                    <li>-
                                    </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand3)
                            <td>
                                <ul>
                                    <li>Unlimited free notification to customers about offers, promotions and news
                                    </li>
                                    <li>Automated notifications on customers birthday
                                    </li>
                                    <li>GPS location based when customers close from your locations
                                    </li>
                                    <li>Extra Points
                                    </li>
                                    <li>Easy to Use CRM
                                    </li>
                                    <li>Works on both IPhone and Andriod
                                    </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand4)
                            <td>
                                <ul>
                                    <li>القسائم الشرائية
                                        من عميل لاخر
                                    </li>
                                    <li>Gift Card بطاقات الهدايا
                                        people could send gift card to each other and bond with friends
                                    </li>
                                  <li>Unlimited free push notifications
                                      to do “flash sales” of new items or to launch new restaurants</li>

                                    <li>خدمة الرسائل النصية
                                        SMS</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand5)

                            <td>
                                <ul>
                                    <li>القسائم الشرائية
                                        من عميل لاخر
                                    </li>
                                    <li>Gift Card بطاقات الهدايا
                                        people could send gift card to each other and bond with friends
                                    </li>
                                    <li>Unlimited free push notifications
                                        to do “flash sales” of new items or to launch new restaurants</li>

                                    <li>خدمة الرسائل النصية
                                        SMS</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand6)
                            <td>     <ul>

                                    <li>مشاركة النقاط كهدايا
                                        لايوجد بطاقات هدايا (بالريال)
                                    </li>
                                    <li>Push Notification to all users </li>
                                    <li>خدمة الرسائل النصية
                                        SMS </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand7)
                            <td>     <ul>

                                    <li>Scheduled through the app Push Notification to all users
                                    </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand8)
                            <td>     <ul>

                                    <li>القسائم الشرائية
                                        من عميل لاخر
                                    </li>
                                    <li>مشاركة النقاط كهدايا
                                        لايوجد بطاقات هدايا (بالريال)</li>
                                    <li>Unlimited free push notifications
                                        to do “flash sales” of new items or to launch new restaurants</li>
                                    <li>خدمة الرسائل النصية
                                        SMS </li>

                                </ul>
                            </td>
                            @endif
                            @if($brand9)
                            <td>     <ul>

                                    <li>-
                                    </li>
                                </ul>
                            </td>
                            @endif
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                        </tr>
                        @endif
                        @if($lang)
                        <tr>

                            <td style="font-weight: bold">Language Supported
                            </td>
                            @if($brand1)
                            <td>
                                <ul>
                                    <li>-
                                    </li>

                                </ul>
                            </td>
                            @endif
                            @if($brand2)
                            <td>
                                <ul>
                                    <li>-
                                    </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand2)
                            <td>
                                <ul>
                                    <li>-
                                    </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand3)
                            <td>
                                <ul>
                                    <li>English

                                    </li>
                                    <li>
                                        Arabic
                                    </li>

                                </ul>
                            </td>
                            @endif
                            @if($brand4)
                            <td>     <ul>

                                    <li>English

                                    </li>
                                    <li>
                                        Arabic
                                    </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand5)
                            <td>     <ul>

                                    <li>English

                                    </li>
                                    <li>
                                        Arabic
                                    </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand6)
                            <td>     <ul>


                                    <li>English

                                    </li>
                                    <li>
                                        Arabic
                                    </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand7)
                            <td>     <ul>


                                    <li>English

                                    </li>
                                    <li>
                                        Arabic
                                    </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand8)
                            <td>     <ul>

                                    <li>-
                                    </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand9)
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            @endif
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>

                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                        </tr>
                        @endif
                        @if($link)
                        <tr>

                            <td style="font-weight: bold">الربط مع الانظمة الاخرى
                            </td>
                            @if($brand1)
                            <td>
                                <ul>
                                    <li>-
                                    </li>

                                </ul>
                            </td>
                            @endif
                            @if($brand2)
                            <td>
                                <ul>
                                    <li>-
                                    </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand3)
                            <td>
                                <ul>
                                    <li>-
                                    </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand4)
                            <td>
                                <ul>
                                    <li>فودكس
                                        مرن
                                        Odoo
                                        رتم
                                        سكوير
                                    </li>

                                </ul>
                            </td>
                            @endif
                            @if($brand5)
                            <td>     <ul>

                                    <li>فودكس
                                        مرن
                                        Odoo</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand6)
                            <td>     <ul>

                                    <li>فودكس
                                    </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand7)
                            <td>     <ul>

                                    <li>فودكس
                                        سلة
                                        زد
                                        wosul www.wosul.sa
                                        Easacc
                                        Dash
                                    </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand8)
                            <td>     <ul>

                                    <li>فودكس
                                    </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand9)
                            <td>     <ul>

                                    <li>-
                                    </li>
                                </ul>
                            </td>
                            @endif
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>

                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                        </tr>
                        @endif
{{--                        @if($cus)--}}
{{--                        <tr>--}}

{{--                            <td style="font-weight: bold">Customization--}}
{{--                            </td>--}}

{{--                            <td>--}}
{{--                                <ul>--}}
{{--                                    <li>---}}
{{--                                    </li>--}}

{{--                                </ul>--}}
{{--                            </td>--}}

{{--                            <td>--}}
{{--                                <ul>--}}
{{--                                    <li>---}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}

{{--                            <td>--}}
{{--                                <ul>--}}
{{--                                    <li>---}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}

{{--                            <td>--}}
{{--                                <ul>--}}
{{--                                    <li>can I earn points on different offers?--}}
{{--                                    </li>--}}

{{--                                </ul>--}}
{{--                            </td>--}}

{{--                            <td>     <ul>--}}

{{--                                    <li>can I earn points on different offers?--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}

{{--                            <td>     <ul>--}}

{{--                                    <li>can I earn points on different offers? no--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>can I earn points on different offers? no--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>can I earn points on different offers?--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>---}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}

{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>     <ul>--}}

{{--                                    <li>-</li>--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        @endif--}}
                        @if($customers)
                        <tr>

                            <td style="font-weight: bold">Existing Customer
                            </td>
                            @if($brand1)
                            <td>
                                <ul>
                                    <li>توينا ، Alfa co شوبك ، منش ، hamburgini.
                                        Apple Bee's, Chillies </li>

                                </ul>
                            </td>
                            @endif
                            @if($brand2)
                            <td>
                                <ul>
                                    <li style="list-style: none">-</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand3)
                            <td>
                                <ul>
                                    <li>أغلب العملاء محلات القهوة المختصة الصغيرة</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand4)
                            <td>
                                <ul>
                                    <li>اكسير البن
                                         </li>
                                    <li>سنابل السلام
                                    </li>
                                    <li>كفة
                                    </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand5)
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand6)
                            <td>     <ul>

                                    <li>المشوى العنابي
                                    </li>
                                </ul>
                            </td>
                            @endif
                            @if($brand7)
                            <td>     <ul>

                                    <li>ابو زيد</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand8)
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            @endif
                            @if($brand9)
                            <td>     <ul>

                                    <li>Caffaine Lab

                                    </li>
                                    <li>
                                        جوار كافيه
                                    </li>
                                </ul>
                            </td>
                            @endif
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>

                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                            <td>     <ul>

                                    <li>-</li>
                                </ul>
                            </td>
                        </tr>

                    @endif
                        <tr>
                            <td >

                            </td>
                            @if($brand1)
                            <td >
                                <form action="{{route('aff',27)}}" method="post">
                                    @csrf
                                    <button class="btn-bg w-100" type="submit">visit site</button>
                                </form>
                            </td>
                            @endif
                            <td >
                                <form action="{{route('aff',28)}}" method="post">
                                    @csrf
                                    <button class="btn-bg w-100" type="submit">visit site</button>
                                </form>

                            </td>
                            <td >
                                <form action="{{route('aff',31)}}" method="post">
                                    @csrf
                                    <button class="btn-bg w-100" type="submit">visit site</button>
                                </form>
                            </td>
                            <td >
                                <form action="{{route('aff',34)}}" method="post">
                                    @csrf
                                    <button class="btn-bg w-100" type="submit">visit site</button>
                                </form>
                            </td>
                            <td >
                                <form action="{{route('aff',119)}}" method="post">
                                    @csrf
                                    <button class="btn-bg w-100" type="submit">visit site</button>
                                </form>
                            </td>
                            <td >
                                <form action="{{route('aff',26)}}" method="post">
                                    @csrf
                                    <button class="btn-bg w-100" type="submit">visit site</button>
                                </form>
                            </td>

                            <td >
                                <form action="{{route('aff',29)}}" method="post">
                                    @csrf
                                    <button class="btn-bg w-100" type="submit">visit site</button>
                                </form>
                            </td>
                            <td >
                                <form action="{{route('aff',36)}}" method="post">
                                    @csrf
                                    <button class="btn-bg w-100" type="submit">visit site</button>
                                </form>
                            </td>
                            <td >
                                <form action="{{route('aff',30)}}" method="post">
                                    @csrf
                                    <button class="btn-bg w-100" type="submit">visit site</button>
                                </form>
                            </td>
                            <td >
                                <form action="{{route('aff',32)}}" method="post">
                                    @csrf
                                    <button class="btn-bg w-100" type="submit">visit site</button>
                                </form>
                            </td>
                            <td >
                                <form action="{{route('aff',33)}}" method="post">
                                    @csrf
                                    <button class="btn-bg w-100" type="submit">visit site</button>
                                </form>
                            </td>
                            <td >
                                <form action="{{route('aff',35)}}" method="post">
                                    @csrf
                                    <button class="btn-bg w-100" type="submit">visit site</button>
                                </form>
                            </td>
                            <td >
                                <form action="{{route('aff',37)}}" method="post">
                                    @csrf
                                    <button class="btn-bg w-100" type="submit">visit site</button>
                                </form>
                            </td>
                            <td >
                                <form action="{{route('aff',117)}}" method="post">
                                    @csrf
                                    <button class="btn-bg w-100" type="submit">visit site</button>
                                </form>
                            </td>
                            <td >
                                <form action="{{route('aff',118)}}" method="post">
                                    @csrf
                                    <button class="btn-bg w-100" type="submit">visit site</button>
                                </form>
                            </td>
                            <td >
                                <form action="{{route('aff',120)}}" method="post">
                                    @csrf
                                    <button class="btn-bg w-100" type="submit">visit site</button>
                                </form>
                            </td>
                            <td >
                                <form action="{{route('aff',121)}}" method="post">
                                    @csrf
                                    <button class="btn-bg w-100" type="submit">visit site</button>
                                </form>                            </td>
                            <td >
                                <form action="{{route('aff',122)}}" method="post">
                                    @csrf
                                    <button class="btn-bg w-100" type="submit">visit site</button>
                                </form>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="9" class="blur-row">

                            </td>
                        </tr>
                        <tr>
                            <td colspan="9" >
                                <div class="d-flex text-center justify-content-center" style="gap: 10px">
                                    <img src="{{asset('images/padlock.png')}}" width="50" height="50">
                                  <p class="pt-3">Want to see the full version ? <a href="{{route('register')}}" style="color: #4115BA">join us</a> at lowkalo , or if you already have an account <a href="{{route('premium')}}" style="color: #4115BA">click here</a> to buy the premium version</p>
                                </div>

                            </td>
                        </tr>

                </table>

            </div >
        </div>


    </div>
</div>


