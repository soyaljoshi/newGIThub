{{ Form::model($department, [ 'route' => [ 'admin::departments.update', $department->id ], 'id' => 'page_edit_form', 'method' => 'put','files' => 'true']) }}
<input type="hidden" name="view" value="frontend/departments/index" />
<div class="uk-grid" data-uk-grid-margin>
    <div class="uk-width-large-7-10">
        <div class="uk-grid uk-grid-width-1-1" data-uk-grid="{gutter:24}">
            <div>
                <div class="md-card">
                    <div class="md-card-content">
                        <h3 class="heading_b uk-margin-bottom">
                            {{ $title }}
                            <div class="uk-float-right">
                                <a href="{{ route('admin::departments.index') }}" class="md-btn md-btn-primary">all Departments</a>
                            </div>
                        </h3>
                        <div class="uk-form-row">
                            <label>Title</label>
                            {{ Form::text( 'title', old('title'), [ 'id' => 'page_title', 'class' => 'md-input', 'required' ] ) }}
                        </div>
                        <div class="uk-width-1-1 mgt-10" style="margin-top: 8px;">
                            <label>Sub Title</label>

                            {{ Form::text( 'sub_title', old('sub_title'), [ 'id' => 'sub_title', 'class' => 'md-input', 'required' ] ) }}
                        </div>
                         <div class="uk-width-1-1" style="margin-top: 8px;">
                            <label>Slug</label>
                            {{ Form::text( 'slug', old('slug'), [ 'id' => 'slug', 'class' => 'md-input', 'required' ] ) }}
                        </div>
                        <div class="uk-width-1-1" style="margin-top: 8px;">
                            <label for="displayOrder">Display Order</label>
                            
                            {{ Form::number( 'displayOrder', old('displayOrder'), [ 'id' => 'displayOrder', 'class' => 'md-input', 'required' ] ) }}
                        </div>
                        <div class="uk-width-1-1">
                            <label>Link</label>
                            {{ Form::text( 'url', old('url'), [ 'id' => 'url', 'class' => 'md-input', 'required' ] ) }}
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="md-card">
                    <div class="md-card-toolbar">
                        <div class="md-card-toolbar-actions">
                            <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                            <i class="md-icon material-icons md-card-toggle">&#xE316;</i>
                        </div>
                        <h3 class="md-card-toolbar-heading-text">
                            Content
                        </h3>
                    </div>
                    <div class="md-card-content">
                        {{ Form::textarea( 'desc', old('desc'), [ 'id' => 'wysiwyg_tinymce', 'class' => 'md-input', 'cols' => '30', 'rows' => '20' ] ) }}
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
                            {{ Form::checkbox('status', 1, old('status'), [ 'id' => 'page_is_published', 'data-switchery' ] ) }}
                            <label for="page_is_published" class="inline-label">Publish</label>
                        </div>
                         <div class="uk-form-row">
                            {{ Form::checkbox('isClinical', 1, old('isClinical'), [ 'id' => 'page_is_published', 'data-switchery' ] ) }}
                            <label for="page_is_published" class="inline-label">Is Clinical</label>
                        </div>
                    </div>
                    <div class="uk-width-medium-1-2">
                        <div class="uk-form-row uk-float-right">
                            <button type="submit" class="md-btn md-btn-primary">Update</button>
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
                    
                        @if(isset($department) && ! is_null($department->image))
                            <input type="file" name="image" id="image_file" class="dropify" data-default-file="{{ asset($department->image->thumbnail(260,198)) }}" />
                        @else
                            <input type="file" name="image" id="image_file" class="dropify" />
                        @endif
                    </div>
                </div>
            </div>
        </div>
        {{ Form::close() }}
        
    </div>
</div>
