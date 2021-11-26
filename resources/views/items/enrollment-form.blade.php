<div class="card mb-3 mt-3" >
    <div class="card-header" id="enrollment-header">
        <h1>Program</h1>
    </div>
    <div class="card-body">
        <div class="mb-1 mt-1">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 form-group @error('level') has-error @enderror">
                            {!! Form::label('level','Level',[],false) !!}
                            {{Form::select('level', [
                                6 => 'Grade 6',
                                7 => 'Grade 7',
                                8 => 'Grade 8',
                                9 => 'Grade 9',
                                10 => 'Grade 10',
                                11 => 'Grade 11',
                                12 => 'Grade 12',
                            ], null, ['class'=>'form-control form-select level', 'id'=>'modal-input-level'])}}
                            <span class="errspan" id="errspan">{{ $errors->first('level') }}</span>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 form-group @error('student_type') has-error @enderror">
                            {!! Form::label('student_type','Student Type',[],false) !!}
                            {{Form::select('student_type', [
                                1 => 'New Student',
                                2 => 'Transferee',
                                3 => 'Regular Student',
                            ], null, ['class'=>'form-control form-select', 'id'=>'modal-input-student_type'])}}
                            <span class="errspan" id="errspan">{{ $errors->first('student_type') }}</span>
                        </div>
                    </div>
                </div>
                
                <div class="form-group" id="SeniorHigh-details">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3 form-group @error('track') has-error @enderror">
                                {!! Form::label('track','Track',[],false) !!}
                                {{Form::select('track', [
                                    1 => 'ACADEMICS',
                                ], null, ['class'=>'form-control form-select track', 'id'=>'modal-input-track'])}}
                                <span class="errspan" id="errspan">{{ $errors->first('track') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 form-group @error('strand') has-error @enderror">
                                {!! Form::label('strand','Strand',[],false) !!}
                                {{Form::select('strand', [
                                    1 => 'ABM',
                                    2 => 'HUMSS',
                                    3 => 'GAS',
                                ], null, ['class'=>'form-control form-select strand', 'id'=>'modal-input-strand'])}}
                                <span class="errspan" id="errspan">{{ $errors->first('strand') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="card-header" id="enrollment-header">
    <h1>Documents</h1>
    </div>
    <div class="card-body">
        <div class="mb-1 mt-1">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-5">
                        <div class="mb-3 form-group @error('title') has-error @enderror">
                            {!! Form::label('title', 'Title',[],false) !!}
                            {!! Form::text('title', null, ['class'=>'form-control', 'id'=>'modal-input-contact']) !!}
                            <span class="errspan" id="errspan">{{ $errors->first('title') }}</span>
                        </div>
                        <div class="mb-3 form-group @error('remarks') has-error @enderror">
                            {!! Form::label('remarks', 'Remarks',[],false) !!}
                            {!! Form::text('remarks', null, ['class'=>'form-control', 'id'=>'modal-input-contact']) !!}
                            <span class="errspan" id="errspan">{{ $errors->first('remarks') }}</span>
                        </div>
                        <div class="uploadPhoto">
                            <input class="photo" type="file" id="image-select" accept="image/*">
                        </div>
                        <div class="submitted-docu mt-4">
                            <h5>Document Submitted:</h5>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="card requirements float-end">
                            <div class="card-body">
                                <h2>Requirements</h2>
                                <p>For New Students & Transferee</p>
                                <ul>
                                    <li>PSA Birth Certificate</li>
                                    <li>Certificate of Good Moral Character</li>
                                    <li>Report Card</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group mt-4">
            <div class="col-md-2">
                <button class="btn btn-primary form-control">Proceed to Payments</button> 
            </div>   
        </div>
        
    </div>
    
</div>


