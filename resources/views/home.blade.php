@extends('layouts.master')

@section('title', 'Home')

@section('content')
<div class="m-portlet m-portlet--space">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                    FAQ Example
                </h3>
            </div>
        </div>
        <div class="m-portlet__head-tools">
            <ul class="m-portlet__nav">
                <li class="m-portlet__nav-item">
                    <a href="#" class="m-portlet__nav-link m-btn--pill">
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" class="form-control form-control-lg m-input m-input--solid m-input--pill" placeholder="Search FAQ...">
                            <span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-search m--font-brand"></i></span></span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="m-portlet__body">
        <div class="row">
            <div class="col-xl-3">
                <div class="m-tabs" data-tabs="true" data-tabs-contents="#m_sections">
                    <ul class="m-nav m-nav--active-bg m-nav--active-bg-padding-lg m-nav--font-lg m-nav--font-bold m--margin-bottom-20 m--margin-top-10 m--margin-right-40" id="m_nav" role="tablist">
                        <li class="m-nav__item">
                            <a class="m-nav__link m-tabs__item m-tabs__item--active" data-tab-target="#m_section_1" href="#">
                                <span class="m-nav__link-text">Buttons</span>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a class="m-nav__link m-tabs__item" data-tab-target="#m_section_2" href="#">
                                <span class="m-nav__link-text">Google Maps</span>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a class="m-nav__link  m-tabs__item" data-tab-target="#m_section_6" href="#">
                                <span class="m-nav__link-text">Theme Configuration</span>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a class="m-nav__link" data-toggle="pill" href="#">
                                <span class="m-nav__link-text">Sidebar Menu</span>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a class="m-nav__link" data-toggle="pill" href="#">
                                <span class="m-nav__link-text">Horizontal Menu</span>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a class="m-nav__link" data-toggle="pill" href="#">
                                <span class="m-nav__link-text">GULP Tasks</span>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Coding & Extending</span>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">References</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="m-tabs-content" id="m_sections">

                    <!--begin::Section 1-->
                    <div class="m-tabs-content__item m-tabs-content__item--active" id="m_section_1">
                        <h1>safsa</h1>
                    </div>

                    <!--begin::Section 3-->
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page_style')
@stop

@section('page_script')
@stop

@section('init_script')
@stop