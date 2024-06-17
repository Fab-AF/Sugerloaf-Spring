<div class="custome-properties" style="overflow-y: auto; max-height:350px;">
	<label class="header" onClick="$('#post_content_info').toggle();adjustCustomeHeight($('.component-properties >.tab-content'))"><span>Post Info</span><div class="header-arrow"></div></label>
	<div class="m-2 row" id="post_content_info">
		<div class="mb-3 col-sm-12">
			<label class="form-label" for="input-model">Title</label>
			<div class="input1">
				<input id="custome-assign-title" type="text" value="{{$page->title}}" class="form-control">
			</div>
		</div>
		
		<div class="mb-3 col-sm-12">
			<label class="form-label" for="input-model">Status</label>
			<div class="input">
				<select class="form-select" id="custome-assign-status">
					@foreach(config('constants.publish') as $key => $val)
						<option value="{{$key}}" @if($page->status == $key) selected @endif>{{$val}}</option>
					@endforeach				
				</select>
			</div>
		</div>

		<div class="mb-3 col-sm-12">
			<label class="form-label" for="input-model">Category</label>
			<div class="input">
				<select class="form-select" id="custome-assign-categoery" multiple>
					@if(!empty($category) && $category->count() > 0)
						@foreach($category as $catkey => $catinfo)	
							@if(!empty($extraParam['selectedCategory']) && in_array($catinfo->id, $extraParam['selectedCategory']))
								<option value="{{$catinfo->id}}" selected>{{$catinfo->name}}</option>
							@else
								<option value="{{$catinfo->id}}">{{$catinfo->name}}</option>
							@endif
						@endforeach
					@endif
				</select>	
			</div>
		</div>
		<div class="mb-3 col-sm-12">
			<label class="form-label" for="input-model">Tag</label>
			<div class="input">
				<select class="form-select" id="custome-assign-tag" multiple>
					@if(!empty($tag) && $tag->count() > 0)
						@foreach($tag as $tagkey => $taginfo)
							@if(!empty($extraParam['selectedTag']) && in_array($taginfo->id, $extraParam['selectedTag']))
								<option value="{{$taginfo->id}}" selected>{{$taginfo->name}}</option>
							@else
								<option value="{{$taginfo->id}}">{{$taginfo->name}}</option>
							@endif
						@endforeach
					@endif
				</select>
			</div>
		</div>	
		
		<div class="mb-3 col-sm-12">
			<iframe id="postfeaturedimage" src="{{route('blog.post.featuredimage')}}?post_id={{$page->id}}" frameborder="0" scrolling="no"></iframe>
		</div>

		<div class="mb-3 col-sm-12">
			<label class="form-label" for="seo_title">SEO Title</label>
			<div class="input">
				<input id="seo_title" name="seo_title" type="text" value="{{$page->seo_title ?? ''}}" class="form-control" placeholder="Enter SEO Title">
			</div>
		</div>

		<div class="mb-3 col-sm-12">
			<label class="form-label" for="seo_keyword">SEO Keywords</label>
			<div class="input">
				<input id="seo_keyword" name="seo_keyword" type="text" value="{{$page->seo_keyword ?? ''}}" class="form-control" placeholder="Enter SEO Keywords">
			</div>
		</div>

		<div class="mb-3 col-sm-12">
			<label class="form-label" for="seo_description">SEO Description</label>
			<textarea class="form-control" row="5" style="height:80px;" id="seo_description" name="seo_description" placeholder="Enter SEO Keywords">{{$page->seo_description ?? ''}}</textarea>
		</div>
	</div>
</div>