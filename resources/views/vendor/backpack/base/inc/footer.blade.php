@if (config('backpack.base.developer_link') && config('backpack.base.developer_name'))
    {{ trans('backpack::base.handcrafted_by') }} <a target="_blank" href="{{ config('backpack.base.developer_link') }}">{{ config('backpack.base.developer_name') }}</a>.
@endif
