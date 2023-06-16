<div>
    <form wire:submit.prevent="simpan">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" wire:model="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Judul</label>
            <input type="text" wire:model="judul_task" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea wire:model="deskripsi_task" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
