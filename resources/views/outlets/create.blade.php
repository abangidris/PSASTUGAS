<!DOCTYPE html>
<html>
<head>
    <title>PSAS PROWEB 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>
      
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3"><i class="fa-solid fa-user"></i> Tugas Akbar Hendritama</h3>
                    <div class="card-body">
                        <form action="{{ route('outlets.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label style="font-family: Georgia, 'Times New Roman', Times, serif">Code</label>
                                <input type="text" class="mb-2 form-control @error('code') is-invalid @enderror" name="code">
                            
                                @error('code')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label style="font-family: Georgia, 'Times New Roman', Times, serif">Nama</label>
                                <input type="text" class="mb-2 form-control @error('name') is-invalid @enderror" name="name">  
                                {{-- value="{{ old('title') }}" placeholder="Masukkan Judul --}}
                            
                                @error('name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label style="font-family: Georgia, 'Times New Roman', Times, serif">Status</label>
                                <select class="mb-2 form-control @error('status') is-invalid @enderror" name="status">
                                    <option value="berlangsung">Berlangsung</option>
                                    <option value="selesai">Selesai</option>
                                </select>
                                @error('status')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            

                            <div class="form-group">
                                <label style="font-family: Georgia, 'Times New Roman', Times, serif">Address</label>
                                <input type="text" class="mb-2 form-control @error('address') is-invalid @enderror" name="address">
                            
                                @error('address')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label style="font-family: Georgia, 'Times New Roman', Times, serif">Phone</label>
                                <input type="text" class="mb-2 form-control @error('phone') is-invalid @enderror" name="phone">
                            
                                @error('phone')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary mt-2">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning mt-2">RESET</button>

                        </form> 
                    </div>
        </div>
</div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
</body>
</html>
