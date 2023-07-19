<div class="modal fade" id="createuser" tabindex="-1" aria-labelledby="createuserLabel" aria-hidden="true">
    <form method="POST" action="{{route('create-session')}}">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="createuserLabel">انشاء درس</h1>
                    <div><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="user-title" class="form-label">اسم الدرس</label>
                        <input type="text" name="title" class="form-control" id="user-title">
                    </div>
                    <div class="mb-3">
                        <label for="user-title" class="form-label">الدرس</label>
                        <div class="form-floating">
                            <textarea class="form-control" name="body" placeholder="اكتب الدرس هنا"  style="height: 100px"></textarea>
                        </div>
                    </div>
                    <label for="grade" class="form-label">الفصل</label>
                    <select class="form-select" id="grade" name="grade_id">
                        <option selected value="0">اختار الفصل</option>
                        @foreach($grades as $grade)
                            <option value="{{ $grade->id }}">{{ $grade->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer" style="justify-content: flex-start">
                    <button type="sumit" class="btn btn-success">حفظ</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                </div>
            </div>
        </div>
    </form>
</div>
