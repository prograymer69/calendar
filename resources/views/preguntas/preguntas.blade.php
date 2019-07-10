
<div class="m-portlet m-portlet--tab">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <span class="m-portlet__head-icon m--hide">
                        <i class="la la-gear"></i>
                    </span>
                    <h3 class="m-portlet__head-text">
                    {{ $data["pregunta"] }}
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">

            <!--begin::Section-->
            <div class="m-section">
                <span class="m-section__sub">
                    
                </span>
                <div class="m-section__content">
                    <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                        <div class="m-demo__preview">
                            <form class="m-form">
                                <div class="m-form__group form-group">
                                    <label for="">Posibles respuestas:</label>
                                    <div class="m-radio-list">
                                        @foreach($data["respuestas"] as $respuesta)
                                        <label class="m-radio">
                                            <input type="radio" name="example_1" value="1"> {{ $respuesta }}
                                            <span></span>
                                        </label>
                                        @endforeach
                                    </div>
                                </div>
                            </form>
                        </div>                        
                    </div>                    
                </div>
            </div>

            <!--end::Section-->
        </div>
        <div class="m-portlet__foot">            
            <div class="text-center">
                <button class="btn btn-primary" style="{{ ($data['buttons'])? '' : 'visibility: hidden' }}">Terminar</button>
            </div>            
        </div>
    </div>
