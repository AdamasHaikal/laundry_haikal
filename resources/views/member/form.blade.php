<div class="modal fade" id="FormInputModal" tabindex="-1" role="dialog" aria-labelledby="#FormInputModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="#FormInputModal">Tambah Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="barang">
            @csrf
            <div id="method"></div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="nama">Nama</label>
                    <input for="varchar" class="form-control" id="name" placeholder="Nama Anda" name="name">
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <input for="text" class="form-control" id="alamat" placeholder="Alamat Anda" name="alamat">
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <input for="enum" class="form-control" id="jenis_kelamin" placeholder="Jenis Kelamin" name="jenis_kelamin">
                </div>
                <div class="mb-3">
                    <label for="telepon">No Telepon</label>
                    <input for="varchar" class="form-control" id="telepon" placeholder="No Telepon" name="telepon">
                </div>

      </div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</form>
</div>