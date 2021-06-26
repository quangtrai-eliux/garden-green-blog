<section class="section first-section">
 
 <div class="container-fluid">
     <div class="masonry-blog clearfix">
     @foreach($top3posts as $post)
     @if ($loop->index < 3)
         <div class="left-side">
             <div class="masonry-box post-media">
                  <img src="upload/garden_cat_01.jpg" alt="" class="img-fluid">
                  <div class="shadoweffect">
                     <div class="shadow-desc">
                         <div class="blog-meta">
                             <span class="bg-aqua"><a href="blog-category-01.html" title="">{{$post->post_type_name}}</a></span>
                             <h4><a href="garden-single.html" title="">{{$post->title}} </a></h4>
                             <small><a href="garden-single.html" title="">{{Carbon\Carbon::parse($post->updated_at)->format('j F, Y')}}</a></small>
                             <small><a href="#" title="">by {{$post->name}}</a></small>
                         </div><!-- end meta -->
                     </div><!-- end shadow-desc -->
                 </div><!-- end shadow -->
             </div><!-- end post-media -->
         </div><!-- end left-side -->
         @endif
         @endforeach
     </div><!-- end masonry -->
 </div>
</section>