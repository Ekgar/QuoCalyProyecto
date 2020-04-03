@extends('layouts.app')

@section('content')

<div class="alert alert-success">Diego Yepes</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div id="calendar"></div>
@endsection
@section('style')
<style>
    html,
    body {
        
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;

    }

    #calnedar {
        max-width: 900px;
        margin: 40px auto;
    }
</style>

@endsection

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            defaultDate: new Date(2020, 0, 8),
            plugins: ['dayGrid','interaction', 'timegrid', 'list'],
            // defaultview: 'timegridweek'

            header:{
                left: 'prev,next  today',
                center: 'title',
                right: 'dayGridMonth , timeGridWeek ,timeGridDay'
            },
            dateClick:function(info){
                $('exampleModal').modal();

            }
        });
        calendar.setOption('locale', 'Es');

        calendar.render();
    });
</script>
@endsection