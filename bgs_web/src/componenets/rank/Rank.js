import Container from 'react-bootstrap/Container';
import BGSTable from '../commons/BGSTable';
import { useState } from 'react';
import BGSClient from '../../lib/BGSClient';

const headers = ['순위', '닉네임', 'ELO', '랭크', '승리', '패배'];

function Rank () {
  const [ data, setData] = useState(BGSClient.getRanks());
  return (
    <Container>
      <BGSTable headers={headers} items={data}></BGSTable>
    </Container>
  )
}

export default Rank;