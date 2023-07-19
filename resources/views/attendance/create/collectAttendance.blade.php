<div class="modal fade " id="collectAttendance" tabindex="-1" aria-labelledby="collectAttendanceLabel" aria-hidden="true">
    <form method="POST" class="rounded" action="{{route('collect-attendance')}}">
        @csrf
        <div class="modal-dialog ">
            <div class="modal-content ">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="collectAttendanceLabel">وضع الحضور</h1>
                    <div><button type="button" style="border: none; background: transparent;" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-regular fa-circle-xmark fa-2x"></i>
                    </button></div>
                </div>
                <div class="modal-body">
                    <label for="session-id" class="form-label">الدرس</label>
                    <select class="form-select" id="session-id" name="session_id">
                        <option selected value="0">اختيار الدرس</option>
                        @foreach($sessions as $session)
                        @if (count($session->attentances) == 0)
                        <option value="{{ $session->id }}">{{ $session->title }}</option>
                            @endif
                        @endforeach
                    </select>
                    <ul class="list-group mt-3">
                        <label  class="form-label">الحضور</label>
                        @forelse ($users->whereNotNull('grade_id') as $user)
                            <li class="list-group-item">
                                <input class="form-check-input me-1" name="users[]" type="checkbox" value="{{ $user->id }}" id="user-{{ $user->id }}">
                                <label class="form-check-label" for="user-{{ $user->id }}">{{ $user->username }}</label>
                            </li>
                        @empty
                            لا يوجد حضور
                        @endforelse
                    </ul>
                </div>
                <div class="modal-footer" style="justify-content: flex-start">
                    <button type="sumit" class="btn btn-success">حفظ</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                </div>
            </div>
        </div>
    </form>
</div>
