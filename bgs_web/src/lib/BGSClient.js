const getOnlineUsers = async () => {
  return fetch(`https://api.bgseleven.com/api/online`, {
    method: 'GET'
  });
}

const getMatches = () => {
  return fetch('https://api.bgseleven.com/api/matches', {
    method: 'GET'
  });
}

const getRanks = () => {
  return fetch('https://api.bgseleven.com/api/ranks', {
    method: 'GET'
  });
}

const getBlackLists = () => {
  return fetch('https://api.bgseleven.com/api/blacklists', {
    method: 'GET'
  });
}
export {
  getOnlineUsers,
  getMatches,
  getRanks,
  getBlackLists
}