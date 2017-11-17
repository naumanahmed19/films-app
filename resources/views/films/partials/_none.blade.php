 <div class="pt-60 pb-60">
     @if(isSearch())
         <div class="alert alert-info">
             <h4>No Item Found</h4>
             <p>Sorry we are unable to find what you are looking for.</p>
         </div>
     @else
         <div class="alert alert-info">
             <h4>Be the first to post your item here.</h4>
             <p>Sorry but currently no item available in this category. Be the first to post and introduce your item to
                 potential customers. We will help you to market.</p>
         </div>
     @endif
 </div>
@include('global.callToAction')