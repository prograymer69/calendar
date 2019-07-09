@extends('template')
@section('content')
<div class="m-portlet m-portlet--tab">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <span class="m-portlet__head-icon m--hide">
                        <i class="la la-gear"></i>
                    </span>
                    <h3 class="m-portlet__head-text">
                        Custom Radios
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">

            <!--begin::Section-->
            <div class="m-section">
                <span class="m-section__sub">
                    Custom radios in default form layout:
                </span>
                <div class="m-section__content">
                    <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                        <div class="m-demo__preview">

                            <!--begin::Form-->
                            <form class="m-form">
                                <div class="m-form__group form-group">
                                    <label for="">Default Radios</label>
                                    <div class="m-radio-list">
                                        <label class="m-radio">
                                            <input type="radio" name="example_1" value="1"> Option 1
                                            <span></span>
                                        </label>
                                        <label class="m-radio">
                                            <input type="radio" name="example_1" value="2"> Option 2
                                            <span></span>
                                        </label>
                                        <label class="m-radio m-radio--disabled">
                                            <input type="radio" disabled=""> Disabled
                                            <span></span>
                                        </label>
                                        <label class="m-radio">
                                            <input type="radio" checked="checked"> Checked
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!--end::Section-->
        </div>
    </div>
@endsection