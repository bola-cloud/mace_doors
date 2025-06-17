<div>
  <div class="col-md-12">
      <div class="card" style="min-height: 970.688px;">
          <div class="card-header">
              <h4 class="card-title" id="basic-layout-form">Category Info</h4>
              <div class="heading-elements">
                  <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                  </ul>
              </div>
          </div>
          <div class="card-content collapse show">
              <div class="card-body">
                  <form class="form" wire:submit.prevent="add_service">

                      <!-- English Fields -->
                      <h4 class="form-section"><i class="ft-user"></i> English Info</h4>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label for="en_name_service">English Name Service</label>
                                  <input type="text" id="en_name_service" class="form-control" placeholder="English Name Service" wire:model="en_name_service">
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label for="en_small_desc">English Small Description</label>
                                  <input type="text" id="en_small_desc" class="form-control" placeholder="Small Description" wire:model="en_small_desc">
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label for="en_desc1">English Description 1</label>
                                  <input type="text" id="en_desc1" class="form-control" placeholder="English Description 1" wire:model="en_desc1">
                              </div>
                          </div>
                          <!-- Add similar fields for English Description 2 and 3 -->
                      </div>

                      <!-- Arabic Fields -->
                      <h4 class="form-section"><i class="ft-user"></i> Arabic Info</h4>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label for="ar_name_service">Arabic Name Service</label>
                                  <input type="text" id="ar_name_service" class="form-control" placeholder="Arabic Name Service" wire:model="ar_name_service">
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label for="ar_small_desc">Arabic Small Description</label>
                                  <input type="text" id="ar_small_desc" class="form-control" placeholder="Small Description" wire:model="ar_small_desc">
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label for="ar_desc1">Arabic Description 1</label>
                                  <input type="text" id="ar_desc1" class="form-control" placeholder="Arabic Description 1" wire:model="ar_desc1">
                              </div>
                          </div>
                          <!-- Add similar fields for Arabic Description 2 and 3 -->
                      </div>

                      <!-- Other Fields -->
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label for="icon">Icon</label>
                                  <input type="text" id="icon" class="form-control" placeholder="Icon" wire:model="icon">
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label for="tag">Tag</label>
                                  <input type="text" id="tag" class="form-control" placeholder="Tag" wire:model="tag">
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label for="photo">Upload Photo</label>
                                  <input type="file" id="photo" class="form-control" wire:model="photo">
                              </div>
                              @error('photo')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                      </div>

                      <div class="form-actions">
                          <button type="button" class="btn btn-warning mr-1">
                              <i class="ft-x"></i> Cancel
                          </button>
                          <button type="submit" class="btn btn-primary">
                              <i class="la la-check-square-o"></i> Save
                          </button>
                      </div>

                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
