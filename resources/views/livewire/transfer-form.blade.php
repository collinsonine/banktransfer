<div>

    <div class="form-group mb-3">
        <label for="bank" class="form-label">Select Bank</label>
        <select class="js-example-basic-single form-select" name="state" wire:model='bank'>
            <option value="">Select Bank</option>
            @foreach ($bank_name as $index => $bankname)
               <option value="{{$bankname->code}}" wire:key='{{$index}}'>{{$bankname->name}}</option>
            @endforeach
          </select>
          @error('bank')
              <small class="text-danger">{{$message}}</small>
          @enderror
    </div>

    <div class="form-group mb-3">
        <label for="account_number" class="form-label">Account Number</label>
        <input type="number" class="form-control @error('account_number') is-invalid @enderror" wire:model.blur='account_number'>
        @error('account_number')
            <small class="text-danger">{{$message}}</small>
        @enderror
        <span class="fs-3 mt-2"><strong><div wire:loading wire:target="verifyAccount">
            Verifying Account Name
        </div>{{$account_name}}</strong></span>
    </div>

    <div class="form-group mb-3">
        <label for="remark" class="form-label"> Remark</label>
        <textarea class="form-control" id="remark" rows="2"></textarea>
    </div>

    <div class="form-group mb-3">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label" for="flexSwitchCheckChecked">Save Beneficiary</label>
          </div>
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-primary btn-sm"> Transfer </button>
    </div>
</div>
