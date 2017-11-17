<div class="radio-dropdown">
    <i class="fa fa-bars"></i>
@inject('type','App\Http\Utilities\Type')

    <button class="no-ajaxy">{{!empty(Request::get('rent_type')) ?  'Per '. Request::get('rent_type') : 'Select Type' }}</button>
    <ul>

        <li>
            <label for="rent_type">
            {{ Form::radio('rent_type','any', !empty(Request::get('rent_type') && Request::get('rent_type') == 'any' ) ? 1 : null , ['class' => 'iCheck autosubmit','id'=>'rent_type']) }}
                <span>Any</span>
            </label>

        </li>

        @foreach($type->collection() as $value => $type)
            <li>
                    <label for="per_hour">
                    {{ Form::radio('rent_type',$value, !empty(Request::get($value) && Request::get($value) == $value ) ? $type : null , ['class' => 'autosubmit iCheck','id'=>'per_hour']) }}
                        <span>{{$type}}</span>
                    </label>
            </li>
        @endforeach

    
        </ul>
    </ul>
</div>
