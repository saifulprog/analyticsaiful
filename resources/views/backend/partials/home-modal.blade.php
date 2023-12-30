<div class="modal fade" id="showModal{{ $sItem->id }}" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

       
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Name :</strong> <br>{{ $sItem->name }}</li>
                        <li class="list-group-item"><strong>Email :</strong> <br>{{ $sItem->email }}</li>
                        <li class="list-group-item"><strong>Mobile :</strong> <br>{{ $sItem->mobile }}</li>
                        <li class="list-group-item"><strong>Property Type :</strong> <br>{{ $sItem->property_type }}</li>
                        <li class="list-group-item"><strong>Service Type :</strong> <br>{{ $sItem->service_type }}</li>
                        <li class="list-group-item"><strong>Price :</strong> <br>{{ $sItem->price }}</li>
                    </ul>
                </div>

                <div class="col-sm-8">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Address :</strong> <br>{{ $sItem->address }}</li>
                        <li class="list-group-item"><strong>Message :</strong> <br>{{ $sItem->message }}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"><i class="fa fa-times fa-lg"></i> Cancel</i></button>
        </div>
         
      </div>
    </div>
  </div>