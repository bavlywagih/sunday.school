<div class="modal fade" id="createGrade" tabindex="-1" aria-labelledby="createGradeLabel" aria-hidden="true">
    <form method="POST" action="{{ $create }}">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="createGradeLabel">انشاء فصل جديد</h1>
                    <div><button type="button" style="border: none; background: transparent;" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-regular fa-circle-xmark fa-2x"></i>
                    </button></div>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="grade-title" class="form-label">اسم الفصل</label>
                        <input type="text" name="title" class="form-control input-create-grade" placeholder="اكتب اسم الفصل هنا" id="grade-title">
                    </div>
                </div>
                <div class="modal-footer" style="justify-content: flex-start">
                    <button type="sumit" class="btn btn-success">حفظ</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                </div>
            </div>
        </div>
    </form>
</div>
