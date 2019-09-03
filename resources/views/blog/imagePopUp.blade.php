<!--POPUP-->


 <div class="modal fade" id="favoritesModalCarruselImage{{$invoice->id}}" tabindex="-1" 

      role="dialog" aria-labelledby="favoritesModalLabel" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:orange">
             N°: {{$invoice->code}}
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
             <h2 class="modal-title" id="favoritesModalLabel"></h2>
      </div>
      <div class="modal-body text-center">

        <img src="{{ asset('images/invoices/'.$invoice->extension) }}" width=100% height=100%>
      </div><!--FIN DEL BODY-->
      <div class="modal-footer">
        <button type="button" 
           class="btn btn-default" 
           data-dismiss="modal">SALIR</button>
      </div>
    </div>
  </div>
</div>
<!--FIN POPUP-->