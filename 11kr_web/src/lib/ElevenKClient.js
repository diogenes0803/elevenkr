const getOnlineUsers = async () => {
  return fetch(`https://api.elevenkr.com/api/online`, {
    method: 'GET'
  });
}

const getMatches = () => {
  return fetch('https://api.elevenkr.com/api/matches', {
    method: 'GET'
  });
}

const getRanks = () => {
  return fetch('https://api.elevenkr.com/api/ranks', {
    method: 'GET'
  });
}

const getBlackLists = () => {
  return fetch('https://api.elevenkr.com/api/blacklists', {
    method: 'GET'
  });
}
export {
  getOnlineUsers,
  getMatches,
  getRanks,
  getBlackLists
}