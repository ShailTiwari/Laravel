    <x-header/>
    <x-sidebar/>
  
      <!-- partial -->
     
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                 <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bordered table</h4>
                  <p class="card-description">
                    Add class <code>.table-bordered</code>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Passwd
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($members as $member)
                        <tr>
                          <td>
                            {{$member['id']}}
                          </td>
                          <td>
                            {{$member['name']}}
                          </td>
                          <td>
                           {{$member['email']}}
                          </td>
                          <td>
                            {{$member['password']}}
                          </td>
                          <td>
                           <a href="{{$member['id']}}"><div class="badge badge-opacity-warning">Delete</div></a>
                          </td>
                        </tr>
                        @endforeach                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        
    <x-footer/>