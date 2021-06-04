<div class="tile">
    <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
        @csrf
        <h3 class="tile-title">Linki do portali społecznościowych</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="social_facebook">Profil Facebook</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Podaj link do facebooka"
                    id="social_facebook"
                    name="social_facebook"
                    value="{{ config('settings.social_facebook') }}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="social_twitter">Profil Twitter</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Podaj link do twittera"
                    id="social_twitter"
                    name="social_twitter"
                    value="{{ config('settings.social_twitter') }}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="social_instagram">Profil Instagram</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Podaj link do instagrama"
                    id="social_instagram"
                    name="social_instagram"
                    value="{{ config('settings.social_instagram') }}"
                />
            </div>
        </div>
        <div class="tile-footer">
            <div class="row d-print-none mt-2">
                <div class="col-12 text-right">
                    <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Aktualizuj</button>
                </div>
            </div>
        </div>
    </form>
</div>
