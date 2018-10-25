<div class="container">
	 <table class="centered striped" id="myTable">
        <thead>
          <tr>
              <th>Order #</th>
              <th>Date</th>
              <th>Status</th>
              <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>12345</td>
            <td>October 11, 1999</td>
            <td><span class="badge green" style="color: white; border-radius: 10%;">Quoted</span></td>
            <td>
              <a class="waves-effect waves-light btn blue-grey lighten-1 modal-trigger" href="#">Print <i class="material-icons right">local_printshop</i></a>
              <a class="waves-effect waves-light btn blue darken-1 modal-trigger" href="#viewModal">Upload <i class="material-icons right">file_upload</i></a>
            </td>
          </tr>
          <tr>
            <td>09876</td>
            <td>October 11, 1999</td>
            <td><span class="badge red" style="color: white; border-radius: 10%;">Unquoted</span></td>
            <td>
              <a class="waves-effect waves-light btn blue-grey lighten-1 modal-trigger" href="#">Print <i class="material-icons right">local_printshop</i></a>
              <a class="waves-effect waves-light btn blue darken-1 modal-trigger" href="#viewModal">Upload <i class="material-icons right">file_upload</i></a>
            </td>

          </tr>
          <tr>
            <td>45677</td>
            <td>October 11, 1999</td>
            <td><span class="badge red" style="color: white; border-radius: 10%;">Unquoted</span></td>
            <td>
              <a class="waves-effect waves-light btn blue-grey lighten-1 modal-trigger" href="#">Print <i class="material-icons right">local_printshop</i></a>
              <a class="waves-effect waves-light btn blue darken-1 modal-trigger" href="#viewModal">Upload <i class="material-icons right">file_upload</i></a>
            </td>
          </tr>
        </tbody>
      </table>
</div>

<!-- Modal Structure -->
  <div id="viewModal" class="modal modal-fixed-footer">
    <div class="modal-content">
      <form action="#">
        <div class="row">
          <div class="input-field">
            <i class="material-icons prefix">confirmation_number</i>
            <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
            <label for="icon_prefix2">Input Check #</label>
          </div>
        </div>
        <div class="file-field input-field">
          <div class="btn">
            <span>File</span>
            <input type="file" multiple>
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload one or more files">
          </div>
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn green">Save</a>
    </div>
  </div>