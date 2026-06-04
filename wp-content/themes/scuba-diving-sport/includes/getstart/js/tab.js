function scuba_diving_sport_open_tab(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

jQuery(document).ready(function () {
    jQuery( ".tab-sec .tablinks" ).first().addClass( "active" );
});

function scuba_diving_sport_copyCoupon() {
    const scuba_diving_sport_coupon = document.getElementById("coupon-code").innerText;
    const scuba_diving_sport_button = document.getElementById("copy-btn");
    const scuba_diving_sport_icon = scuba_diving_sport_button.querySelector("i");
  
    navigator.clipboard.writeText(scuba_diving_sport_coupon).then(() => {
        scuba_diving_sport_icon.classList.remove("fa-regular");
        scuba_diving_sport_icon.classList.add("fa-solid"); // change icon to indicate success
      setTimeout(() => {
        scuba_diving_sport_icon.classList.remove("fa-solid");
        scuba_diving_sport_icon.classList.add("fa-regular");
      }, 2000);
    });
  }
/* ---------------------------
   🔹 Load More / Load Less for Changelog
----------------------------*/
document.addEventListener('DOMContentLoaded', function() {
    const changelogBlocks = document.querySelectorAll('.block-changelog');
    const loadMoreBtn = document.getElementById('scuba-diving-sport-load-more');

    if (!changelogBlocks.length || !loadMoreBtn) return; 

    const initialVisible = 5; 
    let visibleCount = initialVisible;
    let expanded = false;

    changelogBlocks.forEach((block, index) => {
        if (index >= initialVisible) block.style.display = 'none';
    });

    loadMoreBtn.addEventListener('click', function() {
        if (!expanded) {
            for (let i = visibleCount; i < visibleCount + 5 && i < changelogBlocks.length; i++) {
                changelogBlocks[i].style.display = 'flex';
            }
            visibleCount += 5;

            if (visibleCount >= changelogBlocks.length) {
                expanded = true;
                loadMoreBtn.textContent = 'Load Less';
            }
        } else {
            changelogBlocks.forEach((block, index) => {
                block.style.display = index < initialVisible ? 'flex' : 'none';
            });
            visibleCount = initialVisible;
            expanded = false;
            loadMoreBtn.textContent = 'Load More';

            changelogBlocks[0].scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});


