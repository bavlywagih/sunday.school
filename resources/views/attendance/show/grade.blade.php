<div class="tab-pane fade show active mx-3" id="v-pills-grades" role="tabpanel" aria-labelledby="v-pills-grades-tab" tabindex="0">
    <table class="table">
        <thead>
            <tr>
                <th scope="col" class="th-grade">الفصل</th>
            </tr>
        </thead>
        <tbody>
            @if (Auth::user()->role != 0)
                @foreach ($grades as $grade)
                    <tr>
                        <th scope="row"><a class="th-grade" href="{{route('grade' , $grade->id)}}">{{ $grade->title }}</a></th>
                    </tr>
                @endforeach
            @endif
            <tr class="d-grid">
                @if(  Auth()->user()->grade_id == '' )
                    <th scope="row" class="border border-0 grade-th th-grade">
                            انت غير موجود في اي فصل
                        @if (Auth::user()->role != 0 )
                            يرجي التعديل من <a href="{{ route('edit.profile') }}">هنا</a>
                        @endif
                    </th>
                @else
                    <th class="grade-th">فصلك :</th>
                    <th class="grade-th" ><a href="{{route('grade' , Auth()->user()->grade_id)}}">{{Auth()->user()->grade->title}}</a></th>
                @endif
            </tr>
        </tbody>
    </table>
</div>



