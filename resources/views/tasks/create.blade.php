@extends('template')

@section('include_css')
<style>
  .title{
    font-size: 16.6px;
    text-transform: uppercase;
    margin: 15px 0;
    text-align: center;
  }
  .btn-success{
    background-color: #a2112f;
    border-color: #910f2a;
  }
</style>
@endsection

@section('content')
<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title title">
						Crear Evento
					</h3>
				</div>
			</div>
			<!--begin::Form-->
			<form class="kt-form kt-form--label-right" action="{{ route('tasks.store') }}" method="post">
      {{ csrf_field() }}
				<div class="kt-portlet__body">
					<div class="form-group form-group-last">
          @if ($errors->any())
						<div class="alert alert-danger" role="alert">
							<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
						</div>
          </div>
          @endif
					<div class="form-group row">
						<label for="example-text-input" class="col-3 col-form-label">Nombre</label>
						<div class="col-9">
							<input class="form-control" type="text" name="name">
						</div>
          </div>

          <div class="form-group row">
						<label for="example-text-input" class="col-3 col-form-label">Descripci&oacute;n</label>
						<div class="col-9">
              <textarea name="description" class="form-control"></textarea>
						</div>
          </div>

          <div class="form-group row">
						<label for="example-text-input" class="col-3 col-form-label">Fecha</label>
						<div class="col-9">
              <input class="form-control date" type="text" name="task_date" autocomplete="off">
						</div>
          </div>
				</div>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<div class="row">
							<div class="col-3">
							</div>
							<div class="col-9">
								<button type="submit" class="btn btn-success">Guardar</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $('.date').datepicker({
        autoclose: true,
        dateFormat: "yy-mm-dd"
    });
</script>

@endsection