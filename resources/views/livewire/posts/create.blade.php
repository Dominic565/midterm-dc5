<div>
    <div id="create-post-box" class="card">
        <div class="card-header">
            <h3 class="text-center text-white">Create Post</h3>
        </div>
        <div class="card-body">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="title">
                <label for="title">Title</label>
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input id="content-input" type="text" class="form-control" wire:model.defer="content">
                <label for="content">Content</label>
                @error('content')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn" type="submit" wire:click="createPost()">Create</button>
            </div>
        </div>
    </div>
    <style scoped>
        #create-post-box{
            background-color:  	gray;
            color: #1A1B41;
        }

        .mt-4{
        border:  white 2px solid;
    }
        .card-header{
            background-color:  	gray;
            color: #ffa31a;
        }
        a{
            color: #BAFF29;
            margin-right: 8px;
        }

        .btn{
            background-color: green;
            color: #ffa31a;
        }

        .card{
            width: 900px;
        }
    
    </style>
</div>
