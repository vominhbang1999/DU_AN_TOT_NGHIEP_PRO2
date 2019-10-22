var atImgArray = [
    { image: './img/hover_11.jpg', name: 'Sơn Tùng MTP', url: '', urlArtistPage: '#' },
    { image: './img/hover_8.jpg', name: 'Jack and KICM', url: '#', urlArtistPage: '#' },
    { image: './img/hover_9.jpg', name: 'Mỹ Tâm', url: '#', urlArtistPage: '#' },
    { image: './img/hover_10.jpg', name: 'Đức Phúc', url: '#', urlArtistPage: '#' }
    ,
    { image: './img/hover_5.jpg', name: 'Đạt G', url: '#/', urlArtistPage: '#' },
];
var atListImages = $('#atListImages');
var atIndexChange = 0;
document.getElementById('atHref').href = atImgArray[atIndexChange].url; document.getElementById('atHref2').href = atImgArray[atIndexChange].urlArtistPage;
var atName = function (index) {
    $('.trend_img_dot.trend_active').removeClass('trend_active');
    $('#atImage' + index).addClass('trend_active');
    document.getElementById('atBgImg').src = atImgArray[index].image;
    document.getElementById('atNameSinger').innerHTML = atImgArray[index].name;
    document.getElementById('atHref').href = atImgArray[index].url;
    document.getElementById('atHref2').href = atImgArray[index].urlArtistPage;
    atIndexChange = index;
}

for (var index = 0; index < atImgArray.length; index++) {
    var html =
        '<li class="trend_dot" onmouseover="atName(' + index + ');">' +
        '<a href="' + atImgArray[index].urlArtistPage + '">' +
        '<img id="atImage' + index + '" class="trend_img_dot" src="' + atImgArray[index].image + '" alt="">' +
        '</a>'
    '</li>';
    atListImages.append(html);
    if (index == 0) {
        document.getElementById('atBgImg').src = atImgArray[index].image;
        document.getElementById('atNameSinger').innerHTML = atImgArray[index].name;
        $('#atImage' + index).addClass('trend_active');
    }
}

var runIntervelArtistTrending = setInterval(function () {
    if (atIndexChange < atImgArray.length - 1) {
        atIndexChange++;
    } else {
        atIndexChange = 0;
    }
    atName(atIndexChange);
}, 5000);