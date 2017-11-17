<?php

use App\User;
use App\Item;
use App\Review;
use App\Booking;
use App\Category;
use Carbon\Carbon;







function form_button($value = 'Submit', $classes)
{
    return '<button type="submit" class="btn ' . $classes . '">' . $value . '</button >';
}

function form_hidden($field_name, $value)
{
    $form = Form::hidden($field_name, $value, ['v-model' => 'field_obj.' . $field_name]);
    return $form;
}


/**
 * @param $field_name
 * @param $field_label
 * @return mixed
 */
function form_label($field_name, $field_label)
{
    return Form::label($field_name, $field_label, []);

}


function flash($message)
{
    session()->flash('message', $message);
}


function form_error($field_name, $errors)
{

    if ($errors->has($field_name)) {
        return '<span class="help-block error-msg">' . $errors->first($field_name, ':message') . '</span>';
    } else {
        return '<span class="help-block"></span>';
    }
}

/**
 * @param $field_name
 * @param $field_label
 * @param $field_classes
 * @param $errors
 * @return string
 */
function form_text($field_name, $field_label, $field_placeholder = '', $field_classes, $errors, $field_id = '', $field_value = null)
{
    if ($errors->has($field_name)) {
        $field_classes .= ' has-error';
    }
    $form = '<div class="form-group' . $field_classes . ' ">';
    $form .= form_label($field_name, $field_label);
    $form .= Form::text($field_name, $field_value, ['class' => 'form-control', 'id' => $field_id, 'placeholder' => $field_placeholder]);

    $form .= form_error($field_name, $errors);
    $form .= '</div>';

    return $form;

}


function form_price($field_name, $field_label, $field_placeholder, $field_classes, $errors)
{


    if ($errors->has($field_name)) {
        $field_classes .= ' has-error';
    }

    $form = '<div class="field-block form-group ' . $field_classes . ' ">';
    $form .= form_label($field_name, $field_label);

    if (!empty($field_label)) {
        $form .= form_label($field_name, $field_label);
    }

    //
    $form .= Form::text($field_name, null, [
        'class' => 'validate form-control',
        'placeholder' => $field_placeholder
    ]);

    $form .= form_error($field_name, $errors);

    $form .= '</div>'; //row form-group


    return $form;

}

function form_number($field_name, $field_label, $field_placeholder, $field_classes, $errors)
{
    $form = '<div class="field-block">';


    if ($errors->has($field_name)) {
        $field_classes .= ' has-error';
    }

    $form .= '<div class="form-group ' . $field_classes . ' ">';

    if (!empty($field_label)) {
        $form .= form_label($field_name, $field_label);
    }

    //
    $form .= Form::text($field_name, null, [
        'class' => 'validate',
        'placeholder' => $field_placeholder
    ]);

    $form .= form_error($field_name, $errors);

    $form .= '</div>'; //row form-group

    $form .= '</div>'; //row field-block


    return $form;

}



function form_email($field_name, $field_label, $field_classes, $errors)
{

    if ($errors->has($field_name)) {
        $field_classes .= ' has-error';
    }

    $form = '<div class="' . $field_classes . '">';

    $form .= Form::email($field_name, null, ['v-model' => 'field_obj.' . $field_name, 'class' => 'validate ', ' v-bind:class' => '{ \'invalid\': formErrors.' . $field_name . '}']);

    $form .= form_label($field_name, $field_label);

    $form .= '<div class="err ' . $field_name . '">' . $errors->first($field_name, ':message') . '</div>';

    $form .= '</div>';

    return $form;

}


function form_select($field_name, $field_label, $field_classes, $errors = null, $field_options, $field_default = null)
{

    if (!empty($errors) && $errors->has($field_name)) {
        $field_classes .= ' has-error';
    }

    $form = '<div class="form-group ' . $field_classes . '">';
    $form .= form_label($field_name, $field_label);

    $form .= Form::select(
        $field_name,
        $field_options,
        $field_default,
        [
            'placeholder' => 'Choose ' . $field_label,
            'class' => 'form-control autocomplete',

        ]
    );

    $form .= form_error($field_name, $errors);

    $form .= '</div>';
    return $form;

}

function form_select2($field_name, $field_label, $field_classes, $errors = null, $field_options, $field_default = null, $validation = true, $field_placeholder = '', $required = null)
{

    if (!empty($errors) && $errors->has($field_name)) {
        $field_classes .= ' has-error';
    }

    $form = '<div class="form-group ' . $field_classes . '">';
    $form .= form_label($field_name, $field_label);
    if ($required) {
        $form .= Form::select(
            $field_name,
            $field_options,
            $field_default,
            [
                'placeholder' => $field_placeholder,
                'class' => 'class="form-control select2 select2-' . $field_name,
                'id' => 'select2',
                'data-autosubmit-form' => '',
                'required'

            ]
        );
    } else {
        $form .= Form::select(
            $field_name,
            $field_options,
            $field_default,
            [
                'placeholder' => $field_placeholder,
                'class' => 'select2 select2-' . $field_name,
                'id' => 'select2',
                'data-autosubmit-form' => '',


            ]
        );
    }
    if ($field_label) {


        $form .= Form::label($field_name, $field_label);
    }

    if ($validation) {
        $form .= form_error($field_name, $errors);

    }

    $form .= '</div>';
    return $form;

}




function form_date($field_name, $field_label, $field_classes, $errors)
{

    if ($errors->has($field_name)) {
        $field_classes .= ' has-error';
    }


    $form = '<div class="date-pick ' . $field_classes . '">';
    $form .= Form::label($field_name, $field_label);

    $form .= Form::date($field_name, null, ['v-model' => 'field_obj.' . $field_name, 'class' => 'validate datepicker', ' data-error' => '.' . $field_name, ' v-bind:class' => '{ \'invalid\': formErrors.' . $field_name . '}']);
    $form .= '<i class="material-icons ">date_range</i>';
    $form .= '<div class="err ' . $field_name . '">' . $errors->first($field_name, ':message') . '</div>';
    $form .= '</div>';
    return $form;

}

function form_textarea($field_name, $field_label, $field_placeholder, $field_classes, $errors)
{
    if ($errors->has($field_name)) {
        $field_classes .= ' has-error';
    }
    $form = '<div class="form-group' . $field_classes . '">';
    $form .= form_label($field_name, $field_label);
    $form .= Form::textarea($field_name, null, [
        'class' => 'form-control',
        'rows' => 5,
        'placeholder' => $field_placeholder
    ]);
    if ($field_label) {
        $form .= Form::label($field_name, $field_label);
    }

    $form .= form_error($field_name, $errors);
    $form .= '</div>';
    return $form;

}







function carbonDate($date)
{

    $carbonated_date = Carbon::parse($date);

    return $carbonated_date->diffForHumans();
}


// New Functions 2rent


function categories()
{

    $list = array();

    $categories = \App\Category::select('id', 'name')->get();

    foreach ($categories as $category) {

        $list[$category->id] = $category->name;
    }

    return $list;

}


function cats()
{

    $categories = \App\Category::all()->toHierarchy();

    return $categories;

}

function renderNode($node)
{

    $html = '';

    if ($node->isLeaf()) {

        $html .= '<li><a class="no-ajaxy" href="' . $node->slug . '">';

        if (!empty($node->icon)) {

            $html .= '<i class="' . $node->icon . '"></i>';
        }

        $html .= '<span>' . $node->name . '</span></a></li>';


    } else {

        $html .= '<li><a class="no-ajaxy"  href="' . $node->slug . '">' . $node->name . '</a>';

        $html .= '<ul>';

        foreach ($node->children as $child)

            $html .= renderNode($child);

        $html .= '</ul>';

        $html .= '</li>';
    }

    return $html;
}

function children($node)
{

    $html = '';


    if (!$node->inSameScope($node)) {

        $html .= '<li><a class="no-ajaxy" href="' . $node->slug . '"><span>' . $node->name . '</span></a>';
    }


    $html .= '<ul>';

    foreach ($node->children as $child)

        $html .= renderNode($child);

    $html .= '</ul>';

    $html .= '</li>';


    return $html;
}

function categoryName($slug)
{

    $category = Category::whereSlug($slug)->select('name')->first();

    return $category->name;
}


function categoriesSelect($node, $selected)
{

    $html = '';

    if ($node->isLeaf()) {

        $html .= '<option ';

        if (Input::old('category') == $node->id || $selected == $node->id) {

            $html .= 'selected ';
        }


        $html .= 'value="' . $node->id . '">';


        $html .= $node->name . '</option>';

    } else {

        $html .= '<optgroup>';

        //Add All Link
        $html .= '<option ';

        if (Input::old('category') == $node->id || $selected == $node->id) {

            $html .= 'selected ';
        }


        if (!empty($node->icon)) {

            $html .= 'data-icon="' . $node->icon . '" ';

        }

        $html .= 'value="' . $node->id . '">';

        $html .= $node->name . '</option>';


        foreach ($node->children as $child)

            $html .= categoriesSelect($child, $selected);


        $html .= '</optgroup>';
    }

    return $html;
}

function categoriesNameSelect($node, $selected)
{

    $html = '';

    if ($node->isLeaf()) {

        $html .= '<option ';

        if (Input::old('category') == $node->slug || $selected == $node->slug) {

            $html .= 'selected ';

        }

        $html .= 'value="' . $node->slug . '">';


        $html .= $node->name . '</option>';

    } else {

        $html .= '<optgroup>';


        //Add All Link
        $html .= '<option ';

        if (Input::old('category') == $node->slug || $selected == $node->slug) {

            $html .= 'selected ';
        }


        if (!empty($node->icon)) {

            $html .= 'data-icon="' . $node->icon . '" ';

        }

        $html .= 'value="' . $node->slug . '">';

        $html .= $node->name . '</option>';


        foreach ($node->children as $child)

            $html .= categoriesNameSelect($child, $selected);


        $html .= '</optgroup>';
    }

    return $html;
}

function form_select2_categories($field_name,$field_label,$errors, $selected, $placeholder = '',$tags_limit='')
{

    $field_classes = '';
    if ($errors->has($field_name)) {
        $field_classes .= ' has-error';
    }
     $form = '<div class="form-group ' . $field_classes . '">';
    $form .= form_label($field_name, $field_label);
     $form .= '<select class="select2 form-control itemCategory" 
     name="' . $field_name . '[]"
     multiple="multiple" 
     id="' . $field_name . '-select"
     data-placeholder="' . $placeholder . '"
     data-maximum-selection-length="' . $tags_limit . '">';
    foreach (cats() as $node) {
        $form .= categoriesSelect($node, $selected);
    }
    $form .= '</select>';
    $form .= form_error($field_name, $errors);
    $form .= '</div>';
    return $form;
}


function form_select2_nameCategories($errors = null, $selected, $validation = true, $placeholder = '')
{

    $field_name = 'category';

    $field_classes = '';

    if (!empty($errors) && $errors->has($field_name)) {
        $field_classes .= ' has-error';
    }

    $form = '<div class="' . $field_classes . '">';


    $form .= '<select name="category" class="select2 select2-cat">';
    $form .= '<option value="" disabled selected>' . $placeholder . '</option>';

    foreach (cats() as $node) {

        $form .= categoriesNameSelect($node, $selected);
    }

    $form .= '</select>';

    if ($validation) {

        $form .= form_error($field_name, $errors);
    }
    $form .= '</div>';
    return $form;

}



function isRoute($route)
{

    return Route::currentRouteName() == $route;

}



function dateFormat($date)
{

    return Carbon::parse($date)->format('F j, Y  g:i A');

}


function renderNodeLoop($node)
{

    $html = '<ul class="nav nav-pills nav-stacked">';

    $url = URL::route("admin.categories.edit", $node->slug);

    if ($node->isLeaf()) {

        $html .= '<li><a href="' . $url . '">-- ' . $node->name . '</a></li>';

    } else {


        $html .= '<li><a href="' . $url . '"><strong> + ' . $node->name . '</strong></a>';

        $html .= '<ul class="nav nav-pills nav-stacked">';

        foreach ($node->children as $child)

            $html .= renderNodeLoop($child);

        $html .= '</ul>';

        $html .= '</li>';
    }

    $html .= '</ul>';

    return $html;
}
