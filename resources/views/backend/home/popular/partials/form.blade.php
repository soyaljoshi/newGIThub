@include('backend.partials.errors')
<div class="uk-grid" data-uk-grid-margin>
    <div class="uk-width-large-7-10">
        <div class="uk-grid uk-grid-width-1-1" data-uk-grid="{gutter:24}">
            <div>
                <div class="md-card">
                    <div class="md-card-content">
                        <h3 class="heading_b uk-margin-bottom">
                            {{ $title }}
                            <div class="uk-float-right">
                                <a href="{{ route('admin::populartest.index') }}" class="md-btn md-btn-primary">All Recent Activities</a>
                                
                            </div>
                        </h3>
                        <div class="uk-form-row">
                            <div class="uk-grid" data-uk-grid="{gutter:24}">
                                <div class="uk-width-1-1">
                                    <label>Title</label>
                                    {{ Form::text( 'title', old('title'), [ 'id' => 'page_title', 'class' => 'md-input', 'required' ] ) }}
                                </div>
                                <div class="uk-width-1-1">
                                    <label>Sub Title</label>
                                    {{ Form::text( 'subtitle', old('subtitle'), [ 'id' => 'sub_title', 'class' => 'md-input', 'required' ] ) }}
                                </div>
                                <div class="uk-width-1-1">
                                    <label>Link</label>
                                    {{ Form::text( 'url', old('url'), [ 'id' => 'url', 'class' => 'md-input', 'required' ] ) }}
                                </div>   
                                <div class="uk-width-1-1">
                                    <label>Description</label>
                                    {{ Form::textarea( 'description', old('description'), [ 'id' => 'price', 'class' => 'md-input', 'required' ] ) }}
                                </div>                              
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-width-large-3-10">
        <div class="md-card">
            <div class="md-card-content">
                <h3 class="heading_c uk-margin-medium-bottom">Actions</h3>
                <div class="uk-grid">
                    <div class="uk-width-medium-1-2">
                        <div class="uk-form-row">
                            {{ Form::checkbox('status', 1, old('status'), [ 'id' => 'post_is_published', 'data-switchery' ] ) }}
                            <label for="post_is_published" class="inline-label">Publish</label>
                        </div>
                    </div>
                    <div class="uk-width-medium-1-2">
                        <div class="uk-form-row uk-float-right">
                            <button type="submit" class="md-btn md-btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="md-card">
            <div class="md-card-toolbar">
                <h3 class="md-card-toolbar-heading-text">
                    Featured Image
                </h3>
            </div>
            <div class="md-card-content">
                <div class="uk-grid" data-uk-grid-margin="10">
                    <div class="uk-width-1-1">
                        @if(isset($plan) && ! is_null($plan->image))
                            <input type="file" name="image" id="image_file" class="dropify" data-default-file="{{ asset($plan->image->thumbnail(260,198)) }}" />
                        @else
                            <input type="file" name="image" id="image_file" class="dropify" />
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>