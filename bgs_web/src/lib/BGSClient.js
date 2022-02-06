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
  return fetch('/api/blacklists', {
    method: 'GET'
  });
}
export {
  getOnlineUsers,
  getMatches,
  getRanks,
  getBlackLists
}