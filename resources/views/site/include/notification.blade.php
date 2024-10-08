@if (!empty($CurrentOffer))
<div class="notification-section">
    <div class="notification-close notification-icon">
        {!! $CurrentOffer->detail !!}
        <button><i class="ion-close"></i></button>
    </div>
</div>
@endif
