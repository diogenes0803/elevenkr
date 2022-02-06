import Container from 'react-bootstrap/Container';
import BGSTable from '../commons/BGSTable';
import { useState, useEffect } from 'react';
import BGSClient from '../../lib/BGSClient';

const headers = ['순위', '닉네임', 'ELO', '랭크', '승리', '패배'];

function Rank () {
  const [ data, setData] = useState([]);
  const updateData = () => {
    BGSClient.getRanks().then( res => {
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

export default Rank;