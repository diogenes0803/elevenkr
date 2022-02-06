const getOnlineUsers = async () => {
  return fetch(`/api/online`, {
    method: 'GET'
  });
}

const getMatches = () => {
  return fetch('/api/matches', {
    method: 'GET'
  });
}

const getRanks = () => {
  return fetch('/api/ranks', {
    method: 'GET'
  });
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