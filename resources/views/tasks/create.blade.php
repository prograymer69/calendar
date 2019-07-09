<form action="{{ route('tasks.store') }}" method="post">
  {{ csrf_field() }}
  Task name:
  <br />
  <input type="text" name="name" />
  <br /><br />
  Task description:
  <br />
  <textarea name="description"></textarea>
  <br /><br />
  Start time:
  <br />
  <input type="text" name="task_date" class="date" />
  <br /><br />
  <input type="submit" value="Save" />
</form>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $('.date').datepicker({
        autoclose: true,
        dateFormat: "yy-mm-dd"
    });
</script>