<div>
  <div class="col-md-12">
      <div class="card" style="height: 970.688px;">
          <div class="card-header">
              <h4 class="card-title" id="basic-layout-form">Blog Info</h4>
              <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
                  <form class="form" wire:submit.prevent="add_new">
                      <div class="form-body">
                          <h4 class="form-section"><i class="ft-user"></i> Blog Info</h4>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="en_question">Question (English)</label>
                                      <input type="text" id="en_question" class="form-control" placeholder="English Question" wire:model="en_question">
                                      @error('en_question') <span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="ar_question">Question (Arabic)</label>
                                      <input type="text" id="ar_question" class="form-control" placeholder="Arabic Question" wire:model="ar_question">
                                      @error('ar_question') <span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="en_answer">Answer (English)</label>
                                      <textarea id="en_answer" class="form-control" placeholder="English Answer" wire:model="en_answer"></textarea>
                                      @error('en_answer') <span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="ar_answer">Answer (Arabic)</label>
                                      <textarea id="ar_answer" class="form-control" placeholder="Arabic Answer" wire:model="ar_answer"></textarea>
                                      @error('ar_answer') <span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label for="photoInput">Photo</label>
                                      <input type="file" id="photoInput" class="form-control" wire:model="photo">
                                      @if($photo)
                                          <img src="{{ $photo->temporaryUrl() }}" width="250" height="300" class="mt-2">
                                      @endif
                                      @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                              </div>
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
