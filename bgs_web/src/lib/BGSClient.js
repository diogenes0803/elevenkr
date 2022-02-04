const getOnlineUsers = () => {
  let mock = [
    {
      'user_name': '[BGS]soysauce', 
      'user_id':412421,
      'device': 'Oculus Quest2',
      'elo': 2500
    },{
      'user_name': '[BGS]soysauce', 
      'user_id':412421,
      'device': 'Oculus Quest2',
      'elo': 2500
    },{
      'user_name': '[BGS]soysauce', 
      'user_id':412421,
      'device': 'Oculus Quest2',
      'elo': 2500
    },{
      'user_name': '[BGS]soysauce', 
      'user_id':412421,
      'device': 'Oculus Quest2',
      'elo': 2500
    }
  ]
  return mock
}

const getMatches = () => {
  let mock = [
    {
      'user_name': '[BGS]soysauce',
      'opponent_name': '[BGS]soysauce', 
      'type':'친선전',
      'round1': '0:0',
      'round2': '0:0',
      'round3': '',
      'elo': 2500
    },
    {
      'user_name': '[BGS]soysauce',
      'opponent_name': '[BGS]soysauce', 
      'type':'친선전',
      'round1': '0:0',
      'round2': '0:0',
      'round3': '',
      'elo': 2500
    },
    {
      'user_name': '[BGS]soysauce',
      'opponent_name': '[BGS]soysauce', 
      'type':'친선전',
      'round1': '0:0',
      'round2': '0:0',
      'round3': '',
      'elo': 2500
    },
    {
      'user_name': '[BGS]soysauce',
      'opponent_name': '[BGS]soysauce', 
      'type':'친선전',
      'round1': '0:0',
      'round2': '0:0',
      'round3': '',
      'elo': 2500
    }
  ]
  return mock
}

const getRanks = () => {
  let mock = [
    {
      'rank': 1,
      'user_name': '[BGS]soysauce',
      'elo': 2500,
      'world_rank':1,
      'wins': 200,
      'loses': 0
    },
    {
      'rank': 2,
      'user_name': '[BGS]soysauce',
      'elo': 2500,
      'world_rank':1,
      'wins': 200,
      'loses': 0
    },
    {
      'rank': 3,
      'user_name': '[BGS]soysauce',
      'elo': 2500,
      'world_rank':1,
      'wins': 200,
      'loses': 0
    },
    {
      'rank': 4,
      'user_name': '[BGS]soysauce',
      'elo': 2500,
      'world_rank':1,
      'wins': 200,
      'loses': 0
    },
  ]
  return mock
}

const getBlackLists = () => {
  let mock = [
    {
      'user_id': 123124,
      'user_name': '[BGS]soysauce',
      'reason': '개잘핵'
    },
    {
      'user_id': 123124,
      'user_name': '[BGS]soysauce',
      'reason': '개잘핵'
    },
    {
      'user_id': 123124,
      'user_name': '[BGS]soysauce',
      'reason': '개잘핵'
    },
    {
      'user_id': 123124,
      'user_name': '[BGS]soysauce',
      'reason': '개잘핵'
    }
  ]
  return mock
}
  
module.exports.getOnlineUsers = getOnlineUsers;
module.exports.getMatches = getMatches;
module.exports.getRanks = getRanks;
module.exports.getBlackLists = getBlackLists;