fetch('http://localhost/rabbithole/rabbithole-live-score/footballApi/footballData.json')
.then(res => res.json())
.then(data => dataOperation(data))

function dataOperation(data) {
    teamOneScore = data.score[0];
    teamTwoScore = data.score.slice(-1);

    console.log(teamOneScore,teamTwoScore);
}