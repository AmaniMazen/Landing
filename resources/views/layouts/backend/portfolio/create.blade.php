<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('portfolio.store')}}">
                    @csrf

                  <div class="card-body">
                    <div class="form-group">
                      <label>الاسم باللفه العربية</label>
                      <input type="text" name='name' class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>الاسم باللغه الانجليزيه</label>
                        <input type="text" name='name-en' class="form-control" >
                      </div>
                    <div class="form-group">
                      <label >(اختياري)الوصف</label>
                      <textarea name='description' class="form-control" ></textarea>

                    </div>

                  </div>
                  <!-- /.card-body -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>

                </form>
              </div>
        </div>

      </div>
    </div>
  </div>
