<div class="row field-block">
    <div class="col-xs-12 col-md-3">
        <span class="label">Upload Images</span>
    </div>

    <div class="col-xs-12 col-md-9">
        <div class="row">

            @if ($errors->has('slim[0]'))
                upload images
            @endif
            @for ($i = 0; $i < 8; $i++)
                <div class="col-md-2">
                    @if(!empty($item) && !empty($item->getMedia()[$i]))

                        <div class="slim"
                             data-will-remove="imageWillBeRemoved"
                             data-did-remove="imageRemove"
                             data-ratio="free"
                             data-max-file-size="2"
                             data-label="<i class='fa fa-camera'></i>"
                             data-edit="false"
                             data-meta-mid="{{$item->getMedia()[$i]->id}}"
                             data-meta-id="{{$item->id}}">
                            <input type="file" name="slim[]" data-accept="image/jpeg"/>
                            <img src="{{$item->getMedia()[$i]->getUrl('mini')}}" alt="">
                        </div>
                    @else
                        <div class="slim"
                             data-ratio="free"
                             data-max-file-size="2"
                             data-label="<i class='fa fa-camera'></i>"
                             data-edit="true">
                            <input type="file" name="slim[]" data-accept="image/jpeg"/>
                        </div>
                    @endif
                </div>
                @if($i == 3)
        </div>
        <br>
        <div class="row">

            @endif
            @endfor
        </div>

    </div>
</div>