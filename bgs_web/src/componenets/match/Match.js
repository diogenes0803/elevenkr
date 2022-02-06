import Container from 'react-bootstrap/Container';
import BGSTable from '../commons/BGSTable';
import { useState, useEffect } from 'react';
import BGSClient from '../../lib/BGSClient';

const headers = ['Home', 'Away', '구분', '라운드1', '라운드2', '라운드3', 'ELO HOME', 'ELO AWAY'];

function Match () {
  const [ data, setData] = useState([]);
  const updateData = () => {
    BGSClient.getMatches().then( res => {
      res.json().then( jsonRes => {
        setData(jsonRes);
      })
    })
  }
  useEffect(updateData, [])
  return (
    <Container>
      <BGSTable headers={headers} items={data}></BGSTable>
    </Container>
  )
}

export default Match;